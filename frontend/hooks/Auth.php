<?php
class Auth
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    //检测是否登录
    public function check()
    {
        $segment = $this->CI->uri->segment_array();
        $to_check = array_shift($segment);
        $to_check = strtolower($to_check);

        switch($to_check)
        {
            //登录可访问
            case 'u':
                $this->CI->load->library('session');

                $is_admin = $this->is_admin();
                if(!$is_admin) $this->goto_login();

                //是否超时
                $is_expire = $this->is_expire();
                if($is_expire) $this->goto_login();
                break;
            //未登录可访问
            case 'admin':
                $this->CI->load->library('session');
                $is_admin = $this->is_admin();
                if($is_admin)
                {
                    $is_expire = $this->is_expire();
                    if(!$is_expire) $this->goto_admin_home();
                }

                break;
        }
    }

    /**
     * 是否为管理员
     * @return bool
     */
    protected function is_admin()
    {
        if(!$this->CI->session->admin) return false;
        return true;
    }

    /**
     * 是够登录过期
     * @return bool
     */
    protected function is_expire()
    {
        $admin_data = $this->CI->session->admin;

        if(isset($admin_data['login']) && $admin_data['login'] && isset($admin_data['last_active_time']) && ($admin_data['last_active_time'] >= (time()-3600)))
        {
            $this->CI->session->set_userdata('admin', [
                'login' => 1,
                'last_active_time' => time()
            ]);
            return false;
        }

        //未登录 或者 登录时间过期
        $this->CI->session->sess_destroy();
        return true;
    }

    /**
     * 跳转到登录页面
     */
    protected function goto_login()
    {
        redirect('/admin/login');
    }

    /**
     * 跳转到管理员
     */
    protected function goto_admin_home()
    {
        redirect('/u/article');
    }

}