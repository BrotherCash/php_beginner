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
    <ul class="top-menu nav shadow-sm font-weight-bold mb-5">
        <li class="nav-item">
            <a class="nav-link" href="/products/list">Товары</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/categories/list">Категории</a>
        </li>
    </ul>
    <div class="row">
        <div class="col-3">
            <ul class="nav flex-column nav-pills aside-menu font-weight-bold">
                {foreach from=$categories_shared item=category}
                <li class="nav-item">
                    <a class="nav-link{if $category.id == $current_category.id} active shadow{/if}" href="/categories/view?id={$category.id}">{$category.name}</a>
                </li>
                {/foreach}
            </ul>
        </div>
        <div class="col-9">
            {if $h1}<h1 class="mb-5">{$h1}</h1>{/if}


