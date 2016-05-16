<?php

class Database
{
    public static $instance;

    public $connection;

    public function __construct()
    {
        try {
            $this->connect();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function __clone() {}

    public static function getInstance()
    {
        if (static::$instance == null) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    private function connect()
    {
        $this->connection = new PDO(
            'mysql:host=localhost;dbname=shop;charset=utf8',
            'root',
            ''
        );
    }
}
