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

        //如果设置了load_js变量，加载相应的js
        $load_js = $this->CI->load->get_var('load_js');
        if($load_js)
        {
            $load_js = (array)$load_js;
            foreach($load_js as $js_file)
            {
                $this->CI->load->view($js_file);
            }
        }

        $this->CI->load->view('layout/js');
    }
}