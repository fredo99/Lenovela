<?php defined('BASEPATH') or exit('No Dirext Script Access Allowed');

class M_kepala extends CI_Model
{
    public function tampil_semua()
    {
        return $this->db->get('users');
    }

    public function input_kepala($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // public function hanya_kepala($level)
    // {
    //     $this->db->where('level', $level);
    //     $this->db->get_where('users', $level);
    // }

    public function surat_kepala()
    {
        $where = $this->session->userdata('user')['nip'];
        $query = $this->db->query("SELECT * FROM surat JOIN display_surat ON surat.id = display_surat.id WHERE nip='$where'");
        return $query;
    }

    function hanya_kepala()
    {
        $query = $this->db->query('SELECT * FROM users WHERE level=2');
        return $query;
    }

    public function update_kepala($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }

    public function delete_kepala($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
