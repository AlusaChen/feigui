<?php
class Editor extends CI_Controller
{
    public function index()
    {
        /**
         * @var $input CI_Input
         */
        if($this->input->method() == 'post')
        {
            echo($this->input->post('data'));
            exit;
        }
        $this->load->view('u/editor', [
            'load_js' => 'u/js/editor.html'
        ]);
    }

}
