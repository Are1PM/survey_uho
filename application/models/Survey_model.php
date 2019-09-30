<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Survey_model extends CI_Model
{
    public $table       = 'tbl_data_mahasiswa';
    public $id          = 'tbl_data_mahasiswa.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_default_survey()
    {
        $data = array(
            'id_user' => $this->session->userdata['id'],
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nim' => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'fakultas' => $this->input->post('fakultas'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat_rumah' => $this->input->post('alamat_rumah'),
            'nama_orang_tua' => $this->input->post('nama_orang_tua'),
            'pekerjaan_orang_tua' => $this->input->post('pekerjaan_orang_tua'),
            'penghasilan_orang_tua' => $this->input->post('penghasilan_orang_tua'),
        );
        // update nilai kolom user survey
        $this->db->where('id',$this->session->userdata['id']);
        $this->db->update('tbl_user',['default_survey'=>1]);
        $this->session->userdata['default_survey'] = 1;
        return $this->db->insert($this->table, $data);
    }

    public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_user')->row();
        return $query;
    }

    public function get_pertanyaan($status)
    {
        
        $this->db->select('isi, id');
        $this->db->where('status',$status);
        $query = $this->db->get('tbl_pertanyaan');
        return $query->result();
    }

    public function insert_survey()
    {
        if (isset($this->input->post()['submit'])) {
            for ($i=1; $i < count($this->input->post()); $i++) { 
                $hasil = explode('_', $this->input->post('soal_'.$i));
                $data = [
                    'id_user'       => $this->session->userdata('id'),
                    'id_pertanyaan' => $hasil[1],
                    'jawaban'       => $hasil[0]
                ];
                $this->db->insert('tbl_jawaban',$data);
                // print_r($hasil);
            }
            // die;
            $this->db->where('id',$this->session->userdata['id']);
            $this->db->update('tbl_user',['user_survey'=>1]);
            $this->session->userdata['user_survey'] = 1;
            return true;
        }else{
            return false;
        }
    }

}
