<?php

class Laporan extends CI_Controller{
    public function _construct()
    {
        parent::_construct();
        $this->load->library('pdf');
    }

    public function pdf()
    {
        $data = [
            "title" => "Contoh",
            "data" => [
                ["kolom1" => "Kolom1", "kolom2" => "Kolom2"],
                ["kolom1" => "Kolom1", "kolom2" => "Kolom2"],
                ["kolom1" => "Kolom1", "kolom2" => "Kolom2"],
            ]
        ];

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->load_view('laporan', $data, 'laporan-contoh.pdf');
    }

    public function html()
    {
        $data = [
            "title" => "Contoh",
        ];

        $this->load->view('laporan', $data);
    }
}

?>