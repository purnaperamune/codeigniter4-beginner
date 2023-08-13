<?php

namespace App\Controllers;
use CodeIgniter\Controller;

// Controller to view the myview.php. Views always go through a controller.
class Blog extends Controller{
    public function index(){
        echo view("header");
        echo view("myview");
        echo view("footer");
    }
}