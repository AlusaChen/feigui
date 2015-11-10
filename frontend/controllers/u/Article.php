<?php
class Article extends CI_Controller
{
    public function index()
    {
        /**
         * @var CI_Input $input
         */
        //var_dump($this);
        //echo $this->input->get('test');
        echo 'Article';
        $this->load->view('test', [
            'menu' => 'this is menu'
        ]);
    }
}