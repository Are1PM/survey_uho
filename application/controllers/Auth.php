<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Auth_model');
    }

    public function register()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'     => 'Register | ' . $site['nama_aplikasi'],
            'favicon'   => $site['icon_apps'],
            'site'      => $site,
            'role_user'  => $this->db->get('tbl_role')->result() // relasi dari tbl_role untuk mendapatkan data status anda sekarang

        );
        $this->template->load('authentication/layout/template', 'authentication/register', $data);
    }

    public function check_register()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'     => 'Register | ' . $site['nama_aplikasi'],
            'favicon'   => $site['icon_apps'],
            'site'      => $site,
            'role_user'  => $this->db->get('tbl_role')->result()
        );
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'trim|required|min_length[5]|max_length[50]', [
            'min_length' => 'nama lengkap anda pendek sekali minimal 5 karakter '
        ]);
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[50]|is_unique[tbl_user.username]', [
            'min_length' => 'username kependekan cuk',
            'is_unique' => 'username yang anda masukan sudah pernah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password1', 'trim|required|min_length[5]|max_length[20]|matches[password2]', [
            'min_length' => 'password pendek minimal 5 karakter',
            'max_length' => 'password kepanjangan minimal 20 karakter',
            'matches' => 'password yang anda masukan tidak sama ulangi password'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->template->load('authentication/layout/template', 'authentication/register', $data);
        } else {
            $this->Auth_model->reg();
            $this->session->set_flashdata('info', 'pendaftaran anda sukses silahkan login');
            redirect('auth/login', 'refresh', $data);
        }
    }

    public function check_account()
    {
        //validasi login
        $username      = $this->input->post('username');
        $password   = $this->input->post('password');

        //ambil data dari database untuk validasi login
        $query = $this->Auth_model->check_account($username, $password);

        if ($query === 1) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
            <div class="info-box alert-danger">
            <div class="info-box-icon">
            <i class="fa fa-warning"></i>
            </div>
            <div class="info-box-content" style="font-size:14">
            <b style="font-size: 20px">GAGAL</b><br>Username yang dan password Anda masukkan tidak terdaftar.</div>
            </div>
            </p>
            ');
        } elseif ($query === 2) {
            $this->session->set_flashdata(
                'alert',
                '<p class="box-msg">
            <div class="info-box alert-info">
            <div class="info-box-icon">
            <i class="fa fa-info-circle"></i>
            </div>
            <div class="info-box-content" style="font-size:14">
            <b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.</div>
            </div>
            </p>'
            );
        } elseif ($query === 3) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
        <div class="info-box alert-danger">
        <div class="info-box-icon">
        <i class="fa fa-warning"></i>
        </div>
        <div class="info-box-content" style="font-size:14">
        <b style="font-size: 20px">GAGAL</b><br>Password yang Anda masukkan salah.</div>
        </div>
        </p>
            ');
        } else {
            //membuat session dengan nama userData yang artinya nanti data ini bisa di ambil sesuai dengan data yang login
            $userdata = array(
                'is_login'    => true,
                'id'          => $query->id,
                'password'    => $query->password,
                'status'     => $query->status,
                'username'    => $query->username,
                'created_on'  => $query->created_on,
                'user_survey' => $query->user_survey,
                'default_survey' => $query->default_survey,
                'nama_lengkap' => $query->nama_lengkap,
            );
            $this->session->set_userdata($userdata);
            return true;
        }
    }
    
    public function login()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'     => 'Login | ' . $site['nama_aplikasi'],
            'favicon'   => $site['icon_apps'],
            'site'      => $site
        );
        //melakukan pengalihan halaman sesuai dengan levelnya mahasiswa dan alumni
        if ($this->session->userdata('status') == "mahasiswa_aktif") {
            redirect('admin/home');
        }
        if ($this->session->userdata('status') == "mahasiswa_alumni") {
            redirect('member/home');
        }

        //proses login dan validasi nya
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[50]', [
                'min_length' => 'password yang anda masukan terlalu pendek minimal 5 karakter'
            ]);
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[22]', [
                'min_length' => 'password yang anda masukan terlalu pendek minimal 5 karakter'
            ]);
            $error = $this->check_account();

            if ($this->form_validation->run() && $error === true) {
                $data = $this->Auth_model->check_account($this->input->post('username'), $this->input->post('password'));

                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
                if ($data->status == 'mahasiswa_aktif') {
                    redirect('admin/home');
                } elseif ($data->status == 'mahasiswa_alumni') {
                    redirect('member/home');
                }
            } else {
                $this->template->load('authentication/layout/template', 'authentication/login', $data);
            }
        } else {
            $this->template->load('authentication/layout/template', 'authentication/login', $data);
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
