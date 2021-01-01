<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class InflexionModel{
  protected $db;
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  public function __construct(ConnectionInterface & $db){
    $this->db =& $db;
  }

  public function CheckLogin($details){
      $login = $this->db->table('users')->where('user_username =', $details['user_username'])->get()->getResult();
      $pass = "";
      $access = "";
      if($login){
        foreach($login as $lg){
          $pass = $lg->user_password;
          $access = $lg->user_type;
        }
  
        $isValid = password_verify($details['user_password'],$pass);
        if($isValid){
          return "Successfully logged in! ".$access;
        }else{
          return "Incorrect Username/Password";
        }
      }else{
          return "Username does not exist";
      }

      
  }

  public function signUser($details){

  $checkUser = $this->db->table('users')->where('user_username =', $details['user_username'])->get()->getResult();
  
  if($checkUser){
    return 0;
  }else{
    $status = $this->db->table('users')
    ->insert($details);
    return 1;
  }


  
  }
}