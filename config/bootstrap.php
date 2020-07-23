<?php

require_once 'config.php';

$path_info = $_SERVER['PATH_INFO'];

$is_index = substr($path_info, -1) == '/';

if ($is_index) {
    $path_info .= 'list';
}

$controller_path = $_SERVER['DOCUMENT_ROOT'] . '/../App/Controllers' . $path_info . '.php';

require_once $controller_path;
