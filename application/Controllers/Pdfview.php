<?php
namespace App\Controllers;

class Pdfview extends \CodeIgniter\Controller {
    protected $session;

    public function index()
    {
        $this->session = session();
        helper('form');
        $request  = $this->request;
        
        $title 	  = $request->getVar('title');
        $template 	  = $request->getVar('template');
        $mode 	  = $request->getVar('mode');
        $isdate 	  = $request->getVar('date');
        $pos 	  = $request->getVar('pos');
        $userid 	  = $this->session->get('user_id');
        $role 	  = $this->session->get('role');
        
        $pdf = new \App\Libraries\Pdfgenerator();
        $date 		= date('Y/m/d');        

        $modelparam = new \App\Models\ParamModel();

        if($mode == 1){
            $anggota = $modelparam->getMutasi('data_anggota', $userid, $role, $isdate, $pos);
            $penerimaan = $modelparam->getMutasi('data_penerimaan', $userid, $role, $isdate, $pos);
            $uraian = $modelparam->getMutasi('data_uraian', $userid, $role, $isdate, $pos);

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

            $day = date('N', strtotime(date("l")));
            $tgl = (int) date('d');
            $month = (int) date('m');
            $year = (int) date('Y');

            $this->data = array(
                'baseURL' => BASE.'/public',
                'title_pdf' => $title,
                'anggota' => $anggota,
                'penerimaan' => $penerimaan,
                'uraian' => $uraian,
                'hari' => $hari[$day],
                'tanggal' => $tgl.' '.$bulan[$month].' '.$year,
            );

            $orientation = "portrait";

        }else if($mode == 2){

            $kegiatan = $modelparam->getTabulasi($userid, $role, 0, $isdate);
            $kejadian = $modelparam->getTabulasi($userid, $role, 1, $isdate);

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

            $supervisi = $modelparam->getSupervisi($userid, $role, $isdate);

            for ($i=0; $i < count($supervisi); $i++) { 
                $supervisi[$i]->no = $i + 1;
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

        file_put_contents("public/uploads/".$date."/".$title.".pdf", $pdf->generate($html, $file_pdf, $paper, $orientation, false));

        $response = [
            'status'   => 'success',
            'code'     => '1',
            'data' 	   => "public/uploads/".$date."/".$title.".pdf"
        ];

        header('Content-Type: application/json');
		echo json_encode($response);
		exit;
    }
}