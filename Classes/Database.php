<?php

class Database
{
    public static $instance;

    public $connection;

    private function __construct()
    {
        try {
            $this->connect();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function __clone() {}

    public function __sleep()
    {
        return array('mysql:host=localhost;dbname=shop;charset=utf8', 'root', '');
    }

    public function __wakeup()
    {
        $this->connect();
    }

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
