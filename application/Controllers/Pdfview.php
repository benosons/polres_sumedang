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
        $isdate 	  = $request->getVar('date');
        $userid 	  = $this->session->get('user_id');
        $role 	  = $this->session->get('role');
        
        $pdf = new \App\Libraries\Pdfgenerator();
        $date 		= date('Y/m/d');        

        $modelparam = new \App\Models\ParamModel();

        $anggota = $modelparam->getMutasi('data_anggota', $userid, $role, $isdate);
        $penerimaan = $modelparam->getMutasi('data_penerimaan', $userid, $role, $isdate);
        $uraian = $modelparam->getMutasi('data_uraian', $userid, $role, $isdate);

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
        
        // filename dari pdf ketika didownload
        $file_pdf = $title;
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
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