<?php
 
namespace App\Controllers;

class Home extends BaseController
{

    public function index()

    { 

 //like and orlike  == extra data fech from database.
        $db=\config\Database::connect();     
        $builder=$db->table(tableName:'students');

        $builder->select(select:'s_id,s_name,s_age');

        $builder->like(field:'s_subjects' ,match:'j');
        $builder->orlike(field:'s_name' ,match:'m');
      
        // $builder->like(field:'s_name' ,match:'a',side:'before');

        $result=$builder->get();
        var_dump($result->getResult());
        echo '<br>';
        echo '<br>';
        echo $db->getLastQuery();




        // //like and notlike  ==data fech from database only like all data retruns and notlike data not
        // // fecth
        // $db=\config\Database::connect();     
        // $builder=$db->table(tableName:'students');

        // $builder->select(select:'s_id,s_name,s_age');

        // $builder->like(field:'s_subjects' ,match:'j');
        // $builder->notlike(field:'s_name' ,match:'m');
      
        // // $builder->like(field:'s_name' ,match:'a',side:'before');

        // $result=$builder->get();
        // var_dump($result->getResult());
        // echo '<br>';
        // echo '<br>';
        // echo $db->getLastQuery();






//     { 

// //like ==data fech from database same  data in database retruns
// $db=\config\Database::connect();     
// $builder=$db->table(tableName:'students');
// $builder->select(select:'s_id,s_name,s_age');
// $builder->like(field:'s_name' ,match:'sha');
// $result=$builder->get();
// var_dump($result->getResult());
// echo '<br>';
// echo '<br>';
// echo $db->getLastQuery();






// //wherenotIn ==data fech from database remaining all data retruns
// $db=\config\Database::connect();     
// $builder=$db->table(tableName:'students');
// $builder->select(select:'s_id,s_name,s_age');

// $builder->whereNotIn('s_name',['alex','jhon','y']);
// $builder->orwhereNotIn('s_name',['x','j','y']);
// //$builder->where($where);
// $result=$builder->get();
// var_dump($result->getResult());
// echo '<br>';
// echo '<br>';
// echo $db->getLastQuery();






   
//         //wherenotIn ==data fech from database remaining all data retruns
// $db=\config\Database::connect();     
// $builder=$db->table(tableName:'students');
// $builder->select(select:'s_id,s_name,s_age');

// $builder->whereNotIn('s_name',['aalex','jjhon','y']);
// //$builder->where($where);
// $result=$builder->get();
// var_dump($result->getResult());
// echo '<br>';
// echo '<br>';
// echo $db->getLastQuery();



// //orwhereIn ==3 difrent line data fech from database
// $db=\config\Database::connect();     
// $builder=$db->table(tableName:'students');
// $builder->select(select:'s_id,s_name,s_age');
// $builder->whereIn('s_name',['shakzee','jhon','z']);
// $builder->orwhereIn('s_name',['alex','shakzee','y']);
// //$builder->where($where);
// $result=$builder->get();
// var_dump($result->getResult());
// echo '<br>';
// echo '<br>';
// echo $db->getLastQuery();



        
        // //whereIn ==2 data fech from database 
        // $db=\config\Database::connect();     
        // $builder=$db->table(tableName:'students');
        // $builder->select(select:'s_id,s_name,s_age');
        // $builder->whereIn('s_name',['shakzee','jhon','alex']);
        
        // //$builder->where($where);
        // $result=$builder->get();
        // var_dump($result->getResult());
        // echo '<br>';
        // echo '<br>';
        // echo $db->getLastQuery();






//whereIn ==1 data fech from database 

        // $db=\config\Database::connect();     
        // $builder=$db->table(tableName:'students');
        // $builder->select(select:'s_id,s_name,s_age');
      
        // $where='s_id = 2 AND s_name="shakzee"';
        // $builder->where($where);
        // $result=$builder->get();
        // var_dump($result->getResult());
        // echo '<br>';
        // echo '<br>';
        // echo $db->getLastQuery();




//       $db=\config\Database::connect();     
//       $builder=$db->table(tableName:'students');
//       $builder->select(select:'s_id,s_name,s_age');
//       //$builder->where(['s_id'=>2,'s_name'=>'alex']);
//       $where='s_id = 2';
//       $builder->where($where);

//       //$builder->where(key:'s_id',value:2);
//       $builder->orWhere(key:'s_id',value:100);

//       $result=$builder->get();
//       var_dump($result->getResult());
// echo '<br>';
// echo '<br>';
// echo $db->getLastQuery();
     // return view('welcome_message');
    }
    
}
