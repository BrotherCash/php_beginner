<?php


class Response
{
    public static function redirect(string $url = '/')
    {
        header('location:' . $url);
        exit;
    }
}