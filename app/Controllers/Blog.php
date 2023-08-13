<?php

namespace App\Controllers;
use CodeIgniter\Controller;

// Controller to view the myview.php. Views always go through a controller.
class Blog extends Controller{
    public function index(){
        // echo view("header");
        // echo view("myview");
        // echo view("footer");

        $data = [
            "page_title" => "CodeIgniter 4!!!",
            "page_heading" => "CodeIgniter 4 Views!!!",
            "subjects" => ["HTML", "CSS", "JavaScript", "AJAX", "CI4", "BootStrap", "Spring Boot", "Express"]
        ];

        echo view("myview", $data);
    }
}