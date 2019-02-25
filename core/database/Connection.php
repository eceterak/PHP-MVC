<?php

namespace App\Core\Database;

use PDO;
use PDOException;

Class Connection {

    public static function make($config) {
        try {

            return new PDO($config['connection'].';dbname='.$config['name'], $config['username'], $config['password'], $config['options']);

        }
        catch(PDOException $e) {

            die($e->getMessage());
            
        }
    }

}