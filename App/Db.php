<?php

class Db
{

    private static $host = 'localhost';
    private static $database = 'phpbeginner';
    private static $username = 'brothercash';
    private static $password = '';

    private static $connect;

    public static function getConnect()
    {
        if (is_null(static::$connect)) {
            static::$connect = static::connect();
        }

        return static::$connect;
    }

    public static function affectedRows()
    {
        $connect = static::getConnect();
        return mysqli_affected_rows($connect);
    }

    public static function query($query)
    {
        $conn = static::getConnect();
        $result = mysqli_query($conn, $query);

        if (mysqli_errno($conn)) {
            var_dump(mysqli_error($conn));
            exit;
        }

        return $result;
    }

    private static function connect()
    {
        $connect = mysqli_connect(static::$host, static::$username, static::$password, static::$database);

        if (mysqli_connect_errno()) {
            $error = mysqli_connect_error();
            var_dump($error);
            exit;
        }

        return $connect;
    }



}