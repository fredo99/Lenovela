<?php defined('BASEPATH') or exit('No Dirext Script Access Allowed');

class M_surat extends CI_Model
{
    public function tampil_surat()
    {
        return $this->db->get('surat');
    }

    public function input_surat($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_surat($data, $where)
    {
        $this->db->where($where);
        $this->db->update('surat', $data, $where);
        return true;
    }

    public function delete_surat($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function dispo_surat($data, $table)
    {
        $this->db->insert_batch($table, $data);
    }
}
