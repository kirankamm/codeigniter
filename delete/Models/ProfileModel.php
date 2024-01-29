<?php namespace App\Models; 

use CodeIgniter\Model;

class ProfileModel extends Model{


protected $table="profiles";
protected $DBGroup="default";
protected $allowedFields=['user_id','name','address','city','state','country'];
protected $useTimestamps=true;
protected $validationRules=[];
protected $validationMessages=[];  

}
?>