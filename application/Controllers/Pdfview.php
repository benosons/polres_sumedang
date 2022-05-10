<?php
namespace App\Controllers;

class Pdfview extends \CodeIgniter\Controller {
    
    public function index()
    {
            header("Cache-control: no-store, no-cache, must-revalidate");
			header("Expires: Mon, 26 Jun 1997 05:00:00 GMT");
			header("Pragma: no-cache");
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

        $this->session = session();
        helper('form');
        $request  = $this->request;
        
        $title 	  = $request->getVar('title');
        $template 	  = $request->getVar('template');
        $mode 	  = $request->getVar('mode');
        $isdate 	  = $request->getVar('date');
        $pos 	  = $request->getVar('pos');
        $userid 	  = $this->session->get('user_id');
        $role 	  = $this->session->get('user_role');
        $fullname 	  = $this->session->get('user_fullname');

        $date_end = date('Y-m-d', strtotime('-1 day', strtotime($isdate)));

        
        $pdf = new \App\Libraries\Pdfgenerator();
        $date 		= date('Y/m/d');        

        $modelparam = new \App\Models\ParamModel();

        if($mode == 1){
            $anggota = $modelparam->getMutasi('data_anggota', $userid, $role, $isdate, $pos, 1, $date_end );
            $penerimaan = $modelparam->getMutasi('data_penerimaan', $userid, $role, $isdate, $pos, null, $date_end);
            $uraian = $modelparam->getMutasi('data_uraian', $userid, $role, $isdate, $pos, null, $date_end);

            for ($i=0; $i < count($anggota); $i++) { 
                $anggota[$i]->no = $i + 1;
            }

            for ($i=0; $i < count($penerimaan); $i++) { 
                $penerimaan[$i]->no = $i + 1;
            }

            for ($i=0; $i < count($uraian); $i++) { 
                $uraian[$i]->no = $i + 1;
            }

            $hari = ['','Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
            $bulan = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            $newDate = date("d-m-Y", strtotime($isdate));

            $dateing = strtotime($newDate);

            $day = date('N', strtotime($newDate));

            $tgl = (int) date('d', $dateing);
            $month = (int) date('m', $dateing);
            $year = (int) date('Y', $dateing);

            $this->data = array(
                'baseURL' => BASE.'/public',
                'title_pdf' => $title,
                'anggota' => $anggota,
                'penerimaan' => $penerimaan,
                'uraian' => $uraian,
                'hari' => $hari[$day],
                'tanggal' => $tgl.' '.$bulan[$month].' '.$year,
                'fullname' => $fullname
            );

            $orientation = "portrait";

        }else if($mode == 2){

            $kegiatan = $modelparam->getTabulasi($userid, $role, 0, $isdate, $pos);
            $kejadian = $modelparam->getTabulasi($userid, $role, 1, $isdate, $pos);

            for ($i=0; $i < count($kegiatan); $i++) { 
                $kegiatan[$i]->no = $i + 1;
            }

            for ($i=0; $i < count($kejadian); $i++) { 
                $kejadian[$i]->no = $i + 1;
            }

            if(count($kegiatan) > count($kejadian)){
                $pusing = [
                    'no' => ' ',
                    'hari' => ' ',
                    'tanggal' => ' ',
                    'waktu' => ' ',
                    'kejadian' => ' ',
                    'keterangan' =>  ''
                ];

                array_push($kejadian, $pusing);
            }

            if(count($kejadian) > count($kegiatan)){
                $pusing = [
                    'no' => ' ',
                    'hari' => ' ',
                    'tanggal' => ' ',
                    'waktu' => ' ',
                    'kejadian' => ' ',
                    'keterangan' =>  ''
                ];

                array_push($kegiatan, $pusing);
            }

            $this->data = array(
                'baseURL' => BASE.'/public',
                'title_pdf' => $title,
                'polda_logo'  => BASE.'/public/assets/images/polda-jabar.png',
                'ops_logo'  => BASE.'/public/assets/images/ops-polri.png',
                'kegiatan' => $kegiatan,
                'kejadian' => $kejadian
            );

            $orientation = "landscape";
        }else if($mode == 3){

            $supervisi = $modelparam->getSupervisi($userid, $role, $isdate, $pos);

            for ($i=0; $i < count($supervisi); $i++) { 
                $supervisi[$i]->no = $i + 1;
                if(!$supervisi[$i]->waktu){
                    $supervisi[$i]->waktu = '-';
                }
                if($supervisi[$i]->hari == null){
                    $supervisi[$i]->hari = '-';
                }else{
                    $inihari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                    $supervisi[$i]->hari = $inihari[$supervisi[$i]->hari];
                }
            }
            
            $this->data = array(
                'baseURL' => BASE.'/public',
                'title_pdf' => $title,
                'supervisi' => $supervisi,
            );
            
            $orientation = "potrait";
        }
        
        // filename dari pdf ketika didownload
        $file_pdf = $title;
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        
        
        $html = \Twig::instance()->display('admin/pdf/'.$template.'.html', $this->data);
        // run dompdf
        // $pdf->generate($html, $file_pdf,$paper,$orientation);
        if (!is_dir("public/uploads/".$date."/")) {
		    mkdir("public/uploads/".$date."/", 0777, TRUE);
		}

        // if (file_exists("public/uploads/".$date."/".$title.".pdf")) {
        //     unlink("public/uploads/".$date."/".$title.".pdf");
        // }

        $files = glob("public/uploads/".$date."/*"); // get all file names
            foreach($files as $file){ // iterate files
            if(is_file($file)) {
                unlink($file); // delete file
            }
        }
        $randomNumber = rand();
        
        file_put_contents("public/uploads/".$date."/".$randomNumber.".pdf", $pdf->generate($html, $file_pdf, $paper, $orientation, false));

        $response = [
            'status'   => 'success',
            'code'     => '1',
            'data' 	   => "public/uploads/".$date."/".$randomNumber.".pdf"
        ];

        header('Content-Type: application/json');
		echo json_encode($response);
		exit;
    }
}