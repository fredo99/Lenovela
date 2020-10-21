<?php

class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function has_verify($plain_text, $hashed_string)
    {
        $hashed_string = password_verify($plain_text, $hashed_string);
        return $hashed_string;
    }

    public function login()
    {
        if (!$this->session->has_userdata('user')) {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            if ($this->form_validation->run() == false) {

                $this->load->view('authentication/login');
            }
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $this->db->select('nama, nip, password, level, jabatan, alamat, nomor, email');
                $this->db->from('users');
                $this->db->where('nip =', $username);
                $user = $this->db->get()->row_array();

                if ($user) {
                    if (password_verify($password, $user['password'])) {
                        switch ($user['level']) {
                            case 0:
                                $user_level = 'admin';
                                break;
                            case 1:
                                $user_level = 'pimpinan';
                                break;
                            case 2:
                                $user_level = 'kepala';
                                break;
                        }

                        $data = [
                            'user' =>
                            [
                                'nip' => $user['nip'],
                                'level' => $user_level,
                                'nama' => $user['nama'],
                                'jabatan' => $user['jabatan'],
                                'alamat' => $user['alamat'],
                                'nomor' => $user['nomor'],
                                'email' => $user['email'],
                            ]
                        ];
                        $this->session->set_userdata($data);
                        redirect(base_url());
                    }
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah!</div>');
                        redirect(base_url('authentication/login'));
                }
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak teregistrasi!</div>');
                    redirect(base_url('authentication/login'));
        }
            redirect(base_url());
    }

    public function logout()
    {
        if ($this->session->has_userdata('user')) {
            $this->session->unset_userdata('user');
        }
        redirect(base_url('authentication/login'));
    }
}
