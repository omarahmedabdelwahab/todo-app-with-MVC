<?php
require_once ('vendor/thingengineer/mysqli-database-class/MysqliDb.php');

class DB
{
     protected $db;
     public function connect(){
        $database = new MysqliDb (HOST, USER, PASS, DBNAME);
        if($database){
               $this->db = $database;
               return $this->db;
        }else{
            echo "error"; 
        }
     }
}