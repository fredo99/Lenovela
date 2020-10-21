<?php

class Dashboard extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->load->model('m_kepala');
                $this->load->model('m_profile');
                $this->load->library('form_validation');
                $this->load->helper('file');
        }

        public function index()
        {
                if ($this->session->has_userdata('user')) {

                        $data['user'] = $this->m_profile->getByid()->result();
                        $data['kepala'] = $this->m_kepala->hanya_kepala()->result();
                        $this->load->view('dashboard/' . $this->session->userdata('user')['level'], $data);
                        $this->load->view('modal');
                }
                        redirect(base_url('authentication/login'));
        }
}
