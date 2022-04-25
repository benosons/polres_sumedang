<?php
namespace App\Controllers;

class Pdfview extends \CodeIgniter\Controller {
    public function index()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        // $this->load->library('pdfgenerator');
        $request  = $this->request;
        $title 	  = $request->getVar('title');
        $template 	  = $request->getVar('template');
        
        $pdf = new \App\Libraries\Pdfgenerator();
        
        // title dari pdf
        $this->data['title_pdf'] = $title;
        
        // filename dari pdf ketika didownload
        $file_pdf = $title;
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
        $html = \Twig::instance()->display('admin/pdf/'.$template.'.html', $this->data);
        // run dompdf
        // $pdf->generate($html, $file_pdf,$paper,$orientation);

        file_put_contents("public/uploads/".$title.".pdf", $pdf->generate($html, $file_pdf, $paper, $orientation, false));
        exit;
    }
}