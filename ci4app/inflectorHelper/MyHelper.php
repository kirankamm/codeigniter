<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MyHelper extends Controller {
    public function index() {

        helper(filenames: 'inflector'); // Load the form helper

        echo $oneone=singular(string:'onee');
        echo '<br>';

        echo plural($oneone);
        echo '<br>';

        echo camelize(string: 'three');
        echo '<br>';

        echo underscore(string: 'four');
        echo '<br>';

        echo humanize(string: 'five');
        echo '<br>';

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
    }
}

?>




