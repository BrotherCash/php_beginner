<?php /* Smarty version 2.6.31, created on 2020-07-24 13:05:52
         compiled from header.tpl */ ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<div class="site-wrapper">
    <ul class="top-menu">
        <li><a href="/products/">Товары</a></li>
        <li><a href="/categories/">Категории</a></li>
    </ul>
    <?php if ($this->_tpl_vars['h1']): ?><h1><?php echo $this->_tpl_vars['h1']; ?>
</h1><?php endif; ?>