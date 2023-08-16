<?php 

namespace App\Controllers;

class Users extends \CodeIgniter\Controller {
    public function index(){
        // /Applications/MAMP/htdocs/webapp/app/Config/Database.php or using the .env for db configurations
        $db = \Config\Database::connect();
        

        $query = $db -> query('Select userId, username, birthday, age from users');
        $result = $query -> getResult();

        print_r($result);

    }
}
