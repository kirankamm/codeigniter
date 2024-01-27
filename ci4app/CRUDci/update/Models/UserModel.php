<?php namespace App\Models; 

use CodeIgniter\Model;

class UserModel extends Model{


protected $table="users";
protected $DBGroup="default";
protected $primaryKey='id';
protected $allowedFields=['username','email','password'];
protected $useTimestamps=true;
protected $validationRules=[];
protected $validationMessages=[];

}
?>