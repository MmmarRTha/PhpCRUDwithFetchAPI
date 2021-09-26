<?php
require_once 'app/core/config.php';
echo 'database';

class Database
{
    protected function conn()
    {
        $conn = new PDO("mysql:host=".HOST. ";dbname=".DB,USER,PASS);
        return $conn;
    }
}