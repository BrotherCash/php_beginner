<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список товаров</title>
    {literal}
        <style>
            html, body {
                margin: 0;
                padding: 0;
                font: normal 13px Arial, Helvetica, sans-serif;
                background: #e2e2e2;
            }
            .site-wrapper {
                background: #fff;
                padding: 20px 40px;
                width: 980px;
                margin: 0 auto;
            }

            .table {
                border-spacing: 0;
                border-collapse: collapse;
            }
            .table th {
                border: 1px solid #333;
                padding: 5px;
                background: rgba(0,0,0,0.1);
            }
            .table td {
                border: 1px solid #333;
                padding: 3px 5px;
            }

            .form {

            }

            .form.f400p {
                width: 400px;
            }
            .form-element {
                padding: 5px 10px 15px 10px;
            }

            .form-element .label {
                display: block;
                font-weight: bold;
                font-size: 14px;
            }

            .form-element input[type="text"], .form-element input[type="number"], .form-element textarea {
                width: 100%;
            }
        </style>
    {/literal}
</head>
<body>
<div class="site-wrapper">
    {if $h1}<h1>{$h1}</h1>{/if}