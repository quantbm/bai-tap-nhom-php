<?php

class Model
{
    protected $mysql;

    public function __construct()
    {
        $this->mysql = Database::getInstance()->connection;
    }

    public static function all()
    {
        $mysql = Database::getInstance()->connection;

        $class = get_called_class();

        $table = isset($class::$table) ? $class::$table : $class;

        return $products = $mysql->query(
            "select * from $table",
            PDO::FETCH_CLASS,
            $class
        );
    }
}
