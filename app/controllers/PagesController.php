<?php

use App\Core\Controller;

class PagesController extends Controller {

    public function index() 
    {
        return $this->view('pages/index', [
            'test' => 123
        ]);
    }

    public function contact() 
    {
        return $this->json([
            'test' => 123,
            'r' => 234
        ]);
    }

}