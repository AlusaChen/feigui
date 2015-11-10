<?php
$hook['post_controller_constructor']['debug'] = [
    'class' => 'Debug',
    'function' => 'enable_profile',
    'filename' => 'Debug.php',
    'filepath' => 'hooks'
];



$hook['post_controller_constructor']['header'] = [
    'class' => 'View',
    'function' => 'show_header',
    'filename' => 'View.php',
    'filepath' => 'hooks'
];

$hook['post_controller_constructor']['menu'] = [
    'class' => 'View',
    'function' => 'show_menu',
    'filename' => 'View.php',
    'filepath' => 'hooks'
];

$hook['post_controller']['footer'] = [
    'class' => 'View',
    'function' => 'show_footer',
    'filename' => 'View.php',
    'filepath' => 'hooks'
];