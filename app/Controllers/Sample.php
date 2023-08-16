<?php

namespace App\Controllers;
use CodeIgniter\Controller;

// Controller to view the myview.php. Views always go through a controller.
class Sample extends Controller{
    public function create(){
        echo "This is Create Methods: " ;
    }
}