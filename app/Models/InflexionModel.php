<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class InflexionModel{
  protected $db;
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  public function __construct(ConnectionInterface & $db){
    $this->db =& $db;
  }

}