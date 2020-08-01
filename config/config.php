<?php

require_once __DIR__ .'/../libs/Smarty/Smarty.class.php';
require_once __DIR__ .'/../App/Db.php';
require_once __DIR__ .'/../App/Request.php';
require_once __DIR__ .'/../App/Response.php';
require_once __DIR__ .'/../App/Product.php';
require_once __DIR__ .'/../App/Category.php';

$smarty = new Smarty();
$smarty->template_dir = __DIR__ . '/../templates';
$smarty->compile_dir = __DIR__ . '/../var/compile';
$smarty->config_dir = __DIR__ . '/../var/config';
$smarty->cache_dir = __DIR__ . '/../var/cache';


