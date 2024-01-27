<?php

namespace App\Controllers;

use App\Models\UserModel;
class Home extends BaseController
{

    public function index()
    {
        $userModel = new UserModel();

        $data = [
            'username' => 'kiran',
            'password' => password_hash('secret', PASSWORD_DEFAULT),
            'email' => 'kiran@admin.com',
        ];

        $user = $userModel->insert($data);

        // // You might want to check if the insertion was successful
        // if ($user === false) {
        //     // Handle the case where the insertion failed
        //     echo "User insertion failed!";
        // } else {
        //     echo "User inserted successfully!";
        // }

        // //To find Single line
        // $query=$this->db->table('students');
        // $Hi=$query->getWhere(['id'=>8]);
        // //$get=$this->Hi->get(); this line not work
        // $getRowArray=$Hi->getRow();
        // echo $this->db->getLastQuery()."<br/>";//SELECT `name`, `email`, `number` FROM `students` to get
        // var_dump($getRowArray);



        // $query=$this->db->table('students');

        // $query->select('name,email,number');
        // $get=$query->get();
        // $getRowArray=$get->getRowArray();
        // echo $this->db->getLastQuery()."<br/>";//SELECT `name`, `email`, `number` FROM `students` to get
        // var_dump($getRowArray);



        // $query=$this->db->table('students');
        // $query->select('name,email,number');
        // $get=$query->get();
        // $getRowArray=$get->getRow();
        // echo $this->db->getLastQuery()."<br/>";//SELECT `name`, `email`, `number` FROM `students` to get
        //  var_dump($getRowArray);

// $query=$this->db->table('students');
// $query->select('name,email,number');
// $get=$query->get();
// $getRowArray=$get->getResultArray();
// echo $this->db->getLastQuery()."<br/>";//SELECT `name`, `email`, `number` FROM `students` to get
//  var_dump($getRowArray);


        // $query=$this->db->table('students')->where(['name'=>"kiran"])->get();
        // $final=$query->getRow();
        // echo $this->db->getLastQuery()."<br/>";
        // var_dump($final);


        // $query=$this->db->table('students')->where(['name'=>"kiran"])->get();
        // $final=$query->getResultArray();
        // var_dump($final);


// $query=$this->db->table('students')->where(['id'=>4])->get();
// $final=$query->getRowArray();
// var_dump($final);
 
//$query=$this->db->query("SELECT * FROM students");
 //var_dump($query);

// $query=$this->db->query("SELECT * FROM students where id=2");
// var_dump($query); 

//$db=\Config\Database::connect(); //this is path
// $query=$this->db->table('students')->where(['id'=>1])->get();
// $final=$query->getRowArray();


//$results=$query->getRowArray();
//$results=$query->getRowArray();
//$results=$query->getResultArray();
//$db=$this->want->table('students')->get();
//$final=$db->getRowArray();
//var_dump($query);  
       // return view('welcome_message');
    }



    public function about()
    {
        $data=[
            'name'=>'kiran kammar',
            'title'=>'about Us',
             ];

        // echo "welcome_message".$param;
        echo view('template/header',$data);
        echo view('about');
        echo view('template/footer');
    
    }



    public function contact()
    {
        $data=[
            'email'=>'kirakammar@gmail.com',
            'title'=>'contact Us',
             ];

        // echo "welcome_message".$param;
    
    
    echo view('template/header',$data);
    echo view('contact');
    echo view('template/footer');

    }

}
