<?php defined('BASEPATH') or exit('No Dirext Script Access Allowed');

class M_profile extends CI_Model
{

    public function update_profile($data, $where)
    {
        $where = $this->db->where('nip', $where);
        return $this->db->update('users', $data, $where);
    }

    public function getByid()
    {
        $where = $this->session->userdata('user')['nip'];
        $query = $this->db->query("SELECT * FROM users WHERE nip='$where'");
        $query->result();
        return $query;
    }

    public function ubah_password($data, $where)
    {
        $where = $this->db->where('nip', $where);
        $this->db->update('users', $data, $where);
    }

    // public function ambil_password($nip)
    // {
    //     $where = $this->db->where('nip', $nip);
    //     $this->db->get_where('users', $where);
    // }
}
