<?php

class Fungsi_surat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_surat');
        $this->load->library('form_validation');
        $this->load->helper('file');
    }

    function index()
    {
        if ($this->session->has_userdata('user')) {
            // $include['Dashboard'] = 'active';

            $data['surat'] = $this->m_surat->tampil_surat()->result_array();
            $this->load->view('surat/' . $this->session->userdata('user')['level'] . '/surat', $data);
            $this->load->view('template/' . $this->session->userdata('user')['level'] . '/header');
            $this->load->view('footer');
            $this->load->view('modal');
            return;
        }
            redirect(base_url('authentication/login'));
    }

    function tambah_datasurat()
    {
        $surat = $this->input->post('surat');
        $tanggal = $this->input->post('tanggal');
        $file = $_FILES['file'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'pdf|docx|doc';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "Upload Gagal";
            } else {
                $file = $this->upload->data('file_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
            }
        }
        $status = $this->input->post('status');

        $data = array(
            'surat' => $surat,
            'tanggal' => $tanggal,
            'file' => $file,
            'status' => $status
        );

        $this->m_surat->input_surat($data, 'surat');
        redirect(base_url('/surat'));
    }

    function update_surat($id)
    {
        $where = array('id' => $id);
        $query = $this->db->get_where('surat', $where);
        $row = $query->row();
        $surat = $this->input->post('surat');
        $tanggal = $this->input->post('tanggal');
        $file = $_FILES['file'];

        if (!empty($_FILES['file']['name'])) {

            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['overwrite']     = true;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "Upload Gagal";
            } else {
                unlink("./assets/uploads/$row->file");
                $file = $this->upload->data('file_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
            }
        } else {
            $file = $this->input->post('old_file');
        }
        $status = $this->input->post('status');
        $data = array(
            'surat' => $surat,
            'tanggal' => $tanggal,
            'file' => $file,
            'status' => $status
        );
        $this->m_surat->update_surat($data, $where);
        $this->session->set_flashdata('update', '<div class="alert alert-success" role="alert">Diedit</div>');
        redirect(base_url('/surat'));
    }

    function delete_surat($id)
    {
        $where = array('id' => $id);
        $query = $this->db->get_where('surat', $where);
        $row = $query->row();

        $this->m_surat->delete_surat($where, 'surat');
        unlink("./assets/uploads/$row->file");
        redirect(base_url('/surat'));
    }

    function lihat_surat($file)
    {
        $surat = base_url() . '/assets/uploads/' . $file;
        $filename = $file;
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        readfile($surat);
    }
}
