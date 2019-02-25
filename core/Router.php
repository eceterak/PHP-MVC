<?php

namespace App\Core;

class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {
        
        $router = new self;

        require $file;

        return $router;

    }

    public function get($uri, $controller) {
        
        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller) {
       
        $this->routes['POST'][$uri] = $controller;

    }

    public function direct($uri, $requestType) {

        $uri = str_replace('/framework', '', $uri);

        if(array_key_exists($uri, $this->routes[$requestType])) {
           
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );

        }

        die('No route defined for this URI.');

    }

    public function callAction($controller, $action) {

        if(class_exists($controller)) {
    
            if(method_exists($controller, $action)) {
    
                return (new $controller)->$action();
                
            }
            else {

                die('No method for this route.');

            }

        }
        else {

            die('Controller doesnt exists.');

        }


    }

}