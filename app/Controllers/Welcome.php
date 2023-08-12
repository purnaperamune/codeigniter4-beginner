<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException; // Define here when you have to use multiple times.

class Welcome extends Controller {
    public function index(){
        echo "Welcome to CI4!";
    }

    public function test($name){
        echo "I am " .$name;
    }

    public function printInfo($name, $country){
        echo "I am " .$name. " from " .$country;
    }

    // _remap always executes at the first. Used to check if the function exists or not. If the function does not exist, redirect to a default function.
    // public function _remap($method, $param1 = null, $param2 = null){
    //     if($method == "test"){
    //         return $this -> $method($param1);
    //     }
    //     elseif ($method == "printInfo"){
    //         return $this -> $method($param1, $param2);
    //     }
    //     else{
    //         $this -> index();
    //     }
    // }

    public function _remap($method, $param1 = null, $param2 = null){
        if(method_exists($this, $method)){
            return $this -> $method($param1, $param2);
        }
        else{
            $this -> index(); 
            // or throw an exception when there is no function which user mentioned
            // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            // throw PageNotFoundException::forPageNotFound();
        }
        
    }
} 