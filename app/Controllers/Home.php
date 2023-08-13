<?php

namespace App\Controllers;

class Home extends BaseController{
    public function index(){
        $data = [
            "page_title" => "Welcome to CodeIgniter 4!!!",
            "page_heading" => "CodeIgniter 4 Training!",
        ];

        // echo view("layouts/header", $data);
        return view("homeview", $data);
        // echo view('layouts/footer');
    }


    public function about(){
        $data = [
            "page_title" => "Welcome to CodeIgniter 4!!!",
            "page_heading" => "About Us",
        ];

        // echo view("layouts/header", $data);
        // echo view("aboutview");
        // echo view('layouts/footer');

        return view("aboutview", $data);
    }
}
