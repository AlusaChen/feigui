<?php

/**
 * 显示相关
 * Class View
 */
class View
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    //头
    public function show_header()
    {
        if($this->CI->input->is_ajax_request()) return;
        $this->CI->load->view('layout/header');
    }

    //菜单
    public function show_menu()
    {
        if($this->CI->input->is_ajax_request()) return;
        $this->CI->load->view('layout/menu');
    }


    //尾
    public function show_footer()
    {
        if($this->CI->input->is_ajax_request()) return;
        $this->CI->load->view('layout/footer');
    }
}