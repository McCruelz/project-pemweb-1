<?php

class Model
{
    protected $db;
    function __construct()
    {
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'kfcdb';

        $this->db = new mysqli(
            $hostname,
            $username,
            $password,
            $dbname
        );

        if (!$this->db) die('Database Error!');
    }
}
