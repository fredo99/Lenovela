<?php

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_surat');
        $this->load->model('m_kepala');
        $this->load->model('m_profile');
    }


    public function index()
    {
        if ($this->session->has_userdata('user')) {
            // $include['Dashboard'] = 'active';
            $data['user'] = $this->m_profile->getByid()->result();
            $data['surat'] = $this->m_surat->tampil_surat()->result();
            $data['kepala'] = $this->m_kepala->hanya_kepala()->result();
            $data['sk'] = $this->m_kepala->surat_kepala()->result();

            $this->load->view('surat/' . $this->session->userdata('user')['level'] . '/surat', $data);
            $this->load->view('modal');
        } else {
            redirect(base_url('authentication/login'));
        }
    }

    public function dispo_surat()
    {
        $nip = $this->input->post('nip');
        $id = $this->input->post('id_surat');
        $memo = $this->input->post('memo');
        $data = array();
        foreach ($nip as $datanip) {
            array_push($data, array(
                'nip' => $datanip,
                'id' => $id,
                'memo' => $memo

            ));
        }
        $this->m_surat->dispo_surat($data, 'display_surat');
        $this->session->set_flashdata('dispo', '<div class="alert alert-success" role="alert">Data Surat Berhasil Dikirim</div>');
        redirect(base_url('surat'));
    }
}
