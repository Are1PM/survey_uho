<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table       = 'tbl_user';
    public $id          = 'tbl_user.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function reg()
    {
        date_default_timezone_set('ASIA/MAKASSAR');
        $data = array(
            'username' => $this->input->post('username'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'status' => $this->input->post('status_anda'),
            'tanggal_akun_dibuat' => date('Y-m-d H:i:s'),
            'password' => get_hash($this->input->post('password1'))
        );
        return $this->db->insert('tbl_user', $data);
    }

    public function login($username, $password)
    {
        $query = $this->db->get_where('tbl_user', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }

    public function check_account($username)
    {
        //cari username lalu lakukan validasi
        $this->db->where('username', $username);
        $query = $this->db->get($this->table)->row();

        //jika bernilai 1 maka user tidak ditemukan
        if (!$query) {
            return 1;
        }
        //jika bernilai 2 maka user tidak aktif
        if ($query->user_activation == 0) {
            return 2;
        }
        //jika bernilai 3 maka password salah
        if (!hash_verified($this->input->post('password'), $query->password)) {
            return 3;
        }

        return $query;
    }
    // public function callRole()
    // {
    //     $query = $this->db->get('tbl_role');
    //     if ($query->num_rows() > 0) {
    //         return $query->result_array();
    //     }
    // }

    public function logout($date, $id)
    {
        $this->db->where('tbl_user.id', $id);
        $this->db->update('tbl_user', $date);
    }
}
