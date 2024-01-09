<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MyQuery extends Controller 


{

 public function index()
 {
 
$db=\config\Database::connect();
$builder=$db->table(tableName:'students');
$builder->select(select:'s_id');
$result=$builder->get();
var_dump($result->getResult());




//http://localhost:8080/ci4btstrapproject/public/index.php/MyQuery

    //echo view('Project/project'); 
 
 }

}
?>


























// public function index(){

//     echo view('Project/project'); 
// }



