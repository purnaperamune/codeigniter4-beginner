<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Test extends Controller{
    public function index(){
        $parser = \Config\Services::parser();

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

        $parser -> setData($data);
        return $parser -> render("pseudovariable");
    }
}