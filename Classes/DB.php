<?php

class DB
{
    public static function mysql()
    {
        return Database::getInstance()->connection;
    }
}
