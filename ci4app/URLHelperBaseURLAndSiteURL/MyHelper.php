<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MyHelper extends Controller {

    public function index() {
        // Define popup window settings
        $popupSettings = [
            'height' => 500,
            'width' => 600,
            'scrollbars' => 'yes',
            'status' => 'yes',
            'resizable' => 'yes'
        ];

        // Generate a link that opens in a popup window
        echo anchor_popup('MyHelper/user', 'Go to User', $popupSettings);
    }

}
?>



//-------------------------------------------------

//    // public function index() {
//     // Load the form helper

//     public function index() {
//         // // Load the URL helper to use the site_url function
//         //helper('url');
//         echo current_url();
        
//         echo '<br>';
//         // // Call the user function defined below
//         // $this->user();
        
//         $this-> user();
//     }

//     public function user() {
//         echo anchor('MyHelper', 'Go'); // This creates a link to the MyHelper route with the text 'Go'
//     }
    


//-------------------------------------------------


// public function index() {
//     // // Load the URL helper to use the site_url function
//     //helper('url');
//     echo current_url();
    
//     echo '<br>';
//     // // Call the user function defined below
//     // $this->user();
    
//     $this-> user();
// }


// public function user() {
//   echo "<a href="MyHelper">go</a>";

//    // echo anchor(uri:'MyHelper',title:'go to controller');
//      // Example call to current_url(), assuming you have it defined
//     // Other commented-out functionalities
  
//     //return "user";
//     //echo $url;
//     // Uncomment and modify other echo statements as needed
// }









//----------------------------------------------------

    // public function index() {
    //     // Load the URL helper to use the site_url function
    //     helper('url');

    //     // Call the user function defined below
    //     $this->user();
    // }

    // private function user() {
    //     $url = current_url(); // Example call to current_url(), assuming you have it defined
    //     // Other commented-out functionalities

    //     echo $url;
    //     // Uncomment and modify other echo statements as needed
    // }


//---------------------------------------




    //helper(filenames: 'inflector');

    
   // echo 'hi';
   // echo url_string();



  









// echo current_url();

// echo "<br>";

// echo uri_string();





// base_url('Images/one.jpg');

//    }

   



//    echo "<img src=".base_url('Images/one.jpg').">";




    //     public function index() {
    //         // Load the URL helper to use the site_url function
    //         echo "<a href=".site_url('MyHelper/user').">GoForLink</a>";
    // }

    // public function user() {
    //     echo 'hi';
    // }




    // echo base_url( );
    // echo '<br>';

    // echo site_url('hi');
    // echo '<br>';

    // echo site_url('App/Controllers/MyHelper/user/'); 
    // echo '<br>';

    // echo site_url('user/'); 
   // echo '<br>';
   
        // echo "<a href=".site_url('MyHelper/user').">GoForLink</a>";


        // function user(){
        //     echo 'hi';
        //     }

       
       
        

        // helper(filenames: 'inflector'); // Load the form helper

        // echo $oneone=singular(string:'onee');
        // echo '<br>';

        // echo plural($oneone);
        // echo '<br>';

        // echo camelize(string: 'three');
        // echo '<br>';

        // echo underscore(string: 'four');
        // echo '<br>';

        // echo humanize(string: 'five');
        // echo '<br>';

//http://localhost:8012/ci4app/public/MyHelper





        // echo form_open('user/admin', ['id' => 'xyz', 'class' => 'xyz']);

        // echo form_input(['name' => 'name[]', 'id' => 'myid', 'class' => 'myclass', 'value' => '']);

        // echo form_textarea(['name' => 'myTextArea', 'class' => 'myclass', 'value' => '']);

        // echo form_password('mypassword', '', ['class' => 'myclass']);

        // echo form_upload('fileName', '', ['class' => 'myclass']);

        // $myvar = [
        //     '1' => 'Option 1',
        //     '2' => 'Option 2',
        //     '3' => 'Option 3',
        //     '4' => 'Option 4',
        // ];

        // echo form_dropdown('mydropdown', $myvar, '1', ['class' => 'myclass']);

        // echo form_label('Enter your Name', 'xyz', ['id' => 'xyz']);

        // echo form_checkbox('mycheck', 'xyz', true, ['class' => 'myclass']);

        // echo form_close();
    

        




