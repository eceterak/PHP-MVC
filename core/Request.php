<?php

namespace App\Core;

class Request {

    public static function uri() 
    {   
        $uri = str_replace(App::get('config')['app_name'].'/', '', $_SERVER['REQUEST_URI']);

        return trim(parse_url($uri, PHP_URL_PATH));
    }

    public static function method() 
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}