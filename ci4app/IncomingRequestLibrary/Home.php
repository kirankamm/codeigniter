<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       echo view(name:'home');
        //echo 'jai';
       // return view('welcome_message');
    }

    public function newUser()
    {
        $request =\Config\Services::request();
       echo $request->getVar(index:'email');
     //  echo "It Came from newUser...";
        //echo 'jai';
       // return view('welcome_message');
    }



}




