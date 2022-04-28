<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Laporan_perubahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('laporan_perubahan_model');
        $grup = $this->user_model->sesi_grup($_SESSION['sesi']);
        if (! in_array($grup, ['1', '2', '3'], true)) {
            redirect('siteman');
        }
        $this->load->model('header_model');

        //Initialize Session ------------
        $_SESSION['success']  = 0;
        $_SESSION['per_page'] = 20;
        $_SESSION['cari']     = '';
        //-------------------------------

        $this->load->model('header_model');
    }

    public function index($lap = 0, $p = 1, $o = 0)
    {
        $data['p'] = $p;
        $data['o'] = $o;

        if (isset($_POST['per_page'])) {
            $_SESSION['per_page'] = $_POST['per_page'];
        }
        $data['per_page'] = $_SESSION['per_page'];

        $data['config'] = $this->laporan_perubahan_model->configku();
        $data['bln']    = $this->laporan_perubahan_model->bulan(date('m'));
        $data['main']   = $this->laporan_perubahan_model->list_data();
        $data['total']  = $this->laporan_perubahan_model->total_data();

        $data['lap'] = $lap;
        $nav['act']  = 3;
        $header      = $this->header_model->get_data();
        $this->load->view('header', $header);
        $this->load->view('sid/nav', $nav);
        $this->load->view('sid/laporan/perubahan', $data);
        $this->load->view('footer');
    }

    public function cetak()
    {
        $data['config'] = $this->laporan_perubahan_model->configku();
        $data['bln']    = $this->laporan_perubahan_model->bulan(date('m'));
        $data['main']   = $this->laporan_perubahan_model->list_data();
        $data['total']  = $this->laporan_perubahan_model->total_data();

        $this->load->view('sid/laporan/perubahan_print', $data);
    }
}
