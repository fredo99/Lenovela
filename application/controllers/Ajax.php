<?php
class Ajax extends CI_Controller
{

    public function dispo_surat()
    {
        $this->load->model('m_surat');

        $nip = $this->input->post('nip');
        $ids = $this->input->post('id_surat');
        $memo = $this->input->post('memo');
        $data = array();
        foreach ($nip as $datanip) {
            array_push($data, array(
                'nip' => $datanip,
                'id' => $ids,
                'memo' => $memo

            ));
        }
        $this->m_surat->dispo_surat($data, 'display_surat');
        $this->session->set_flashdata('dispo', '<div class="alert alert-success" role="alert">Data Surat Berhasil Dikirim</div>');
        redirect(base_url('surat'));
    }

    public function batal_dispo($ids)
    {
        $this->load->model('m_surat');
        $where = array('id' => $ids);
        $this->db->get_where('display_surat', $where);

        $this->m_surat->delete_surat($where, 'display_surat');

        if ($this->db->affected_rows()) {
            echo 1;
            return;
        }
            echo 0;
    }

    public function cek_dispo($ids)
    {
        $check = $this->db->query("SELECT id FROM display_surat WHERE id='$ids'")->num_rows();
        json_encode($check);
    }
}
