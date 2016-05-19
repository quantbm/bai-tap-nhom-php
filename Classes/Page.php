<?php

class Page
{
    public static function check($page)
    {
        return isset($_GET[$page]) ? true : false;
    }

    public static function get($page)
    {
        if (isset($_GET[$page])) {
            require_once('pages/' . $_GET[$page] . '.php');
        } else {
            require_once('pages/home.php');
        }
    }
}
