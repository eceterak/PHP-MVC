<?php

namespace App\Core;

class Controller {

    public function view($view, $data = []) 
    {
        return View::load($view, $data);
    }

    public function json($data)
    {
        header('Content-type: application/json');

        echo json_encode($data);
    }

}