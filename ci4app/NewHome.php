<?php 

namespace App\Controllers;

use CodeIgniter\Controllers; 
class NewHome extends BaseController{


public function index(){


  $myData['data']=array('id'=>array(1,2,3),'name'=>array('a','b','c'));
// $myData['data']= [1,2,3];
// $myData['anotherData']= [100,200,300];

echo view('index',$myData);
echo view('header');   
echo view('footer');





// echo "NewHomee 1"; 

}

public function second($para){

    echo "secodMethod 2.$para"; 

}
}

//http://localhost:8080/ci4app/public/index.php/NewHome/secodMethod
?>