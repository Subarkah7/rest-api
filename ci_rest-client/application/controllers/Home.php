<?php


class Home extends CI_Controller {
    public function index() {
        $data['judul'] = "Halaman Utama";
        $this->load->view('template/header', $data);
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }
}