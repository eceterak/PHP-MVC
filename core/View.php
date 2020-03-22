<?php

namespace App\Core;

class View {
    public static function load($file, $data = [])
    {
        $path = 'app/views/'.$file.'.php';

        if(file_exists($path)) {
            extract($data);
            require($path);
        }
        else {
            die('View not found!');
        }
    }
}