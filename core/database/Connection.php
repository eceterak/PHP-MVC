<?php

namespace App\Core\Database;

use PDO;
use PDOException;
use App\Core\Database\QueryBuilder;

Class Connection {

    public static function make($config) {
        try {

            return new PDO($config['connection'].';dbname='.$config['name'], $config['username'], $config['password'], $config['options']);

        }
        catch(PDOException $e) {

            die($e->getMessage());
            
        }
    }

    public function foo(QueryBuilder $queryBuilder) {
        $queryBuilder->selectAll('table');
    }

    public function bar() {
        
    }

}