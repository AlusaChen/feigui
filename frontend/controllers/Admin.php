<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function login()
    {
        $password = $this->input->get_post('password');
        if($password == '6tfc@5rdx')
        {
            $this->session->set_userdata('admin', [
                'login' => 1,
                'last_active_time' => time()
            ]);

            redirect('/u/welcome');
            return;
        }

        echo 'need password';
    }

    public function register()
    {

    }

}