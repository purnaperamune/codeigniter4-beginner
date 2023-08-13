<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Test extends Controller{
    public $parser; // Using Contructor, when you have multiple uses

    public function __construct(){
       $this -> parser = \Config\Services::parser();
    }

    public function index(){
        // $parser = \Config\Services::parser(); 

        $data = [
            "page_title" => "Hello World!",
            "question" => "What's up?",
            "subjects_list" => [
                ['subject' => 'CSS', 'abbr' => 'Cascading Style Sheets'],
                ['subject' => 'HTML', 'abbr' => 'Hyper Text Markup Languag'],
                ['subject' => 'JSON', 'abbr' => 'JavaScript Object Notation'],
                ['subject' => 'AJAX', 'abbr' => 'Asynchronous JavaScript and XML'],
            ],
            "status" => true
        ];

        // $parser -> setData($data);
        // return $parser -> render("pseudovariable");  Can do in one line as below mentioned

        return $this -> parser -> setData($data) -> render("pseudovariable");
    }

    public function viewFilters(){
        // $parser = \Config\Services::parser();

        $data = [
            "page_title" => "Hello World!",
            "question" => "What's up?",
            "date" => "16-10-2001"
        ];

        return $this -> parser -> setData($data) -> render("filterview");
    }
}