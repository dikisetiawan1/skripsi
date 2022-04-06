<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporanbarang extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Laporan barang";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan', $data);
        $this->load->view('templates/footer');
    }
}