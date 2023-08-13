<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use \CodeIgniter\View\Table;

class Data extends Controller{
    public function index(){
        // Check for table templates as well: https://codeigniter.com/user_guide/outgoing/table.html
        $table = new Table();

        $table -> setHeading(["Name", "City", "State"]);
        $table -> addRow(["Purna", "Colombo", "Western"]);
        $table -> addRow(["Purna", "Colombo", "Western"]);
        $table -> addRow(["Purna", "Colombo", "Western"]);

        echo $table -> generate();

        $data = [
            ["Name", "City", "State"],
            ["Purna", "Colombo", "Western"],
            ["Kulaja", "Galle", "Sotuhern"],
            ["dulina", "Jaffna", "North"]
        ];

        // $data = $db - >query("select * from table");
        echo $table -> generate($data);

        // Passing data to the view
        $records['users'] =  $table -> generate($data);
        echo view("dataview", $records);
    }
}