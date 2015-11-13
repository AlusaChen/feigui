<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

//auth
$hook['post_controller_constructor']['auth'] = [
    'class' => 'Auth',
    'function' => 'check',
    'filename' => 'Auth.php',
    'filepath' => 'hooks'
];

//头部 css
$hook['post_controller_constructor']['header'] = [
    'class' => 'View',
    'function' => 'show_header',
    'filename' => 'View.php',
    'filepath' => 'hooks'
];

//菜单
$hook['post_controller_constructor']['menu'] = [
    'class' => 'View',
    'function' => 'show_menu',
    'filename' => 'View.php',
    'filepath' => 'hooks'
];

//尾
$hook['post_controller']['footer'] = [
    'class' => 'View',
    'function' => 'show_footer',
    'filename' => 'View.php',
    'filepath' => 'hooks'
];

