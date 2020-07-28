<?php

require_once 'config.php';

$path_info = $_SERVER['PATH_INFO'];

$is_index = substr($path_info, -1) == '/';

if ($is_index) {
    $path_info .= 'list';
}

$controller_path = $_SERVER['DOCUMENT_ROOT'] . '/../App/Controllers' . $path_info . '.php';

$categories = get_category_list($connect);
$smarty->assign('categories_shared', $categories);

if (file_exists($controller_path)) {
    require_once $controller_path;
} else {
    $smarty->display('404.tpl');
}

