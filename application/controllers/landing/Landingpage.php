<?php

class Landingpage extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konfigurasi_model', 'ModelIdentitas');
    }
    public function index()
    {
        $site = $this->ModelIdentitas->listing();
        $data = array(
            'title' => 'LandingPage |' . $site['nama_aplikasi'],
            'favicon' => $site['icon_apps'],
            'site'  => $site
        );
        $this->template->load('landing/landingpage', 'landing/v_landing', $data);
    }
}
