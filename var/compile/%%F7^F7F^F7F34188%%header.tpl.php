<?php /* Smarty version 2.6.31, created on 2020-07-27 10:58:01
         compiled from header.tpl */ ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<div class="site-wrapper container">
    <ul class="top-menu nav rounded shadow font-weight-bold mb-5">
        <li class="nav-item">
            <a class="nav-link" href="/products/">Товары</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/categories/">Категории</a>
        </li>
    </ul>
    <div class="row">
        <div class="col-3">
            <ul class="nav flex-column nav-pills aside-menu font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Категория 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Категория 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Категория 3</a>
                </li>
            </ul>
        </div>
        <div class="col-9">
            <?php if ($this->_tpl_vars['h1']): ?><h1 class="mb-5"><?php echo $this->_tpl_vars['h1']; ?>
</h1><?php endif; ?>

