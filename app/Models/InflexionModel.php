<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class InflexionModel{
  protected $db;
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  public function __construct(ConnectionInterface & $db){
    $this->db =& $db;
  }


  //LOGIN FUNCTION
  public function loginFinder($loginDetails){
    
  }

  public function registerAccount($registryDetails){
    $register = $this->db->table("members")
                            ->insert($registryDetails);
    return $register;
  }
}