<?php

use SebastianBergmann\Environment\Console;

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_profile');
        $this->load->helper('string');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->has_userdata('user')) {
            $data['user'] = $this->m_profile->getByid()->result()[0];
            $this->load->view('profile/' . $this->session->userdata('user')['level'] . '/profile', $data);
            $this->load->view('modal');
        }
            redirect(base_url('authentication/login'));
    }

    public function update_profile()
    {
        $where = $this->session->userdata('user')['nip'];
        $query = $this->db->get_where('users', $where);
        $row = $query->row();
        $jabatan = $this->session->userdata('user')['jabatan'];
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nomor = $this->input->post('nomor');
        $jenkel = $this->input->post('jenkel');
        $email = $this->input->post('email');
        $foto = $_FILES['foto'];

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/uploads/img';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['overwrite']     = true;
            $config['max_size']      = 2048;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
            }
                unlink("./assets/uploads/img/$row->foto");
                $foto = $this->upload->data("file_name");
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
        } 
            $foto = $this->input->post('old_foto');

        $data = array(
            'jabatan' => $jabatan,
            'nama' => $nama,
            'alamat' => $alamat,
            'nomor' => $nomor,
            'jenkel' => $jenkel,
            'email' => $email,
            'foto' => $foto
        );


        if ($this->m_profile->update_profile($data, $where)) {
            $this->session->set_flashdata('up_profile', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
            redirect(base_url('/profile'));
        }
            $this->session->set_flashdata('up_profile', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Disimpan</div>');
    }

    public function getByid()
    {
        $where = $this->session->userdata('user')['nip'];

        $this->m_profile->getByid($where, 'users');
    }

    public function ubah_password()
    {
        $where = $this->session->userdata('user')['nip'];
        $this->db->query("SELECT password FROM users WHERE nip='$where' ");
        // $old_password = $query->result();
        // $passlama = $this->input->post('passlama');
        $baru = $this->input->post('passbaru');
        $konf = $this->input->post('konfpass');

        if ($baru == $konf) {
            $data = array(
                'password' => password_hash($konf, PASSWORD_DEFAULT)
            );
            $this->m_profile->ubah_password($data, $where);
            $this->session->set_flashdata('password', '<div class="alert alert-success" role="alert">Password Berhasil Diganti</div>');
            redirect(base_url('/profile'));
        } else {
            $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Password Baru Tidak Sama</div>');
            redirect(base_url('/profile'));
        }

        // if (($passlama == $old_password) && ($baru == $konf)) {
        //     $data = array(
        //         'password' => $konf
        //     );
        //     $this->m_profile->ubah_password($data, $where);
        //     $this->session->set_flashdata('password', '<div class="alert alert-success" role="alert">Password Berhasil Diganti</div>');
        //     redirect(base_url('/profile'));
        // } elseif (($passlama != $old_password) && ($baru == $konf)) {
        //     $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Kata Sandi Lama Salah</div>');
        //     redirect(base_url('/profile'));
        // } elseif (($passlama == $old_password) && ($baru != $konf)) {
        //     $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Password Baru Tidak Sama</div>');
        //     redirect(base_url('/profile'));
        // } elseif (($passlama != $old_password) && ($baru != $konf)) {
        //     $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Password Tidak Berhasil Diganti</div>');
        //     redirect(base_url('/profile'));
        // }
    }

    // public function ubah_password()
    // {
    //     $where = $this->session->userdata('user')['nip'];
    //     $query = $this->db->query("SELECT password FROM users WHERE nip='$where' ");
    //     $old_password = $query->result();
    //     $baru = $this->input->post('passbaru');
    //     $konf = $this->input->post('konfpass');

    //     if ($this->input->post('passlama') == $old_password) {
    //         if ($baru == $konf) {
    //             $data = array(
    //                 'password' => $konf
    //             );
    //             $this->m_profile->ubah_password($data, $where);
    //             $this->session->set_flashdata('password', '<div class="alert alert-success" role="alert">Password Berhasil Diganti</div>');
    //             redirect(base_url('/profile'));
    //         } else {
    //             redirect(base_url('/profile'));
    //             $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Password Baru Tidak Sama</div>');
    //         }
    //     } else {
    //         redirect(base_url('/profile'));
    //         $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Kata Sandi Lama Salah</div>');
    //     }
    // }
}
