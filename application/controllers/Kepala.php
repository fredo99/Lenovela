<?php

class Kepala extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kepala');
        $this->load->helper('string');
        $this->load->model('m_profile');
        $this->load->library('form_validation', 'email');
        $this->load->helper('file', 'email', 'url');
    }

    public function index()
    {
        if ($this->session->has_userdata('user')) {

            $data['user'] = $this->m_profile->getByid()->result();
            $data['kepala'] = $this->m_kepala->hanya_kepala()->result();
            $this->load->view('kepala/' . $this->session->userdata('user')['level'] . '/kepala', $data);
            $this->load->view('modal');
        }
            redirect(base_url('authentication/login'));
    }

    function tambah_kepala()
    {
        $nip = $this->input->post('nip');
        $query = $this->db->query("SELECT nip FROM users where nip='$nip'");
        $cek_nip = $query->num_rows();
        if ($cek_nip > 0) {
            $this->session->set_flashdata('cek_nip', '<div class="alert alert-danger" role="alert">Nip sudah pernah digunakan sebelumnya</div>');
            redirect(base_url('/kepala'));
        } else {
            $password = random_string('md5');
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $jabatan = $this->input->post('jabatan');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nomor = $this->input->post('nomor');
            $jenkel = $this->input->post('jeniskel');
            $email = $this->input->post('email');
            $level = 2;

            $data = array(
                'nip' => $nip,
                'password' => $password_hash,
                'jabatan' => $jabatan,
                'nama' => $nama,
                'alamat' => $alamat,
                'nomor' => $nomor,
                'jenkel' => $jenkel,
                'email' => $email,
                'level' => $level
            );

            // Konfigurasi email
            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'lenovela2020@gmail.com',  // Email gmail
                'smtp_pass'   => 'Admin1999',  // Password gmailss  
                'mailtype'  => 'html',
                'charset'   => 'iso-8859-1'
            );

            // Load library email dan konfigurasinya
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            // Email dan nama pengirim
            $this->email->from('lenovela2020@gmail.com', 'lenovela');

            // Email penerima
            $this->email->to($email); // Ganti dengan email tujuan

            // Subject email
            $this->email->subject('[PENDAFTARAN] Akun Kepala | LENOVELA');

            // Isi email
            $this->email->message("Halo, $nama <br> Selamat Akun Anda Sudah Terdaftar.<br><br> Dibawah adalah detail akun Anda : <br><br> NIP: $nip  <br><br> Password : $password <br><br> Akun Anda telah aktif dan dapat digunakan.");

            if ($this->email->send()) {
                $this->m_kepala->input_kepala($data, 'users');
                $this->session->set_flashdata('pluskepala', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
                redirect(base_url('/kepala'));
            } else {
                $this->session->set_flashdata('pluskepala', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Disimpan</div>');
                redirect(base_url('/kepala'));
            }
        }
    }

    function delete_kepala($nip)
    {
        $where = array('nip' => $nip);

        $this->m_kepala->delete_kepala($where, 'users');
        redirect(base_url('/kepala'));
    }

    // function kirim_email()
    // {
    //     $email = $this->input->post('email');
    //     $nip = $this->input->post('nip');
    //     $nama = $this->input->post('nama');
    //     $password = $this->input->post('password');
    //     // Konfigurasi email
    //     $config = array(
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'ssl://smtp.googlemail.com',
    //         'smtp_port' => 465,
    //         'smtp_user' => 'lenovela2020@gmail.com',  // Email gmail
    //         'smtp_pass'   => 'Admin1999',  // Password gmailss  
    //         'mailtype'  => 'html',
    //         'charset'   => 'iso-8859-1'
    //     );

    //     // Load library email dan konfigurasinya
    //     $this->load->library('email', $config);
    //     $this->email->set_newline("\r\n");

    //     // Email dan nama pengirim
    //     $this->email->from('lenovela2020@gmail.com', 'lenovela');

    //     // Email penerima
    //     $this->email->to($email); // Ganti dengan email tujuan

    //     // Subject email
    //     $this->email->subject('[PENDAFTARAN] Akun Kepala | LENOVELA');

    //     // Isi email
    //     $this->email->message("Halo, $nama <br> Selamat Akun Anda Sudah Terdaftar.<br><br> Dibawah adalah detail akun Anda : <br><br> NIP: $nip  <br><br> Password : $password <br><br> Akun Anda telah aktif dan dapat digunakan.");

    //     // Tampilkan pesan sukses atau error
    //     if ($this->email->send()) {
    //         echo 'Sukses! email berhasil dikirim.';
    //     } else {
    //         echo 'Error! email tidak dapat dikirim.';
    //     }
    // }
}
