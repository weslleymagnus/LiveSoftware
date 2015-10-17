<?php

namespace Model\DAO;

use App\Application;

class DAO extends Application{
    
    protected $engine = "mysql";
    protected $host = "localhost";
    protected $database = "";
    protected $db_user = "root";
    protected $db_pass = "";
    
    public $connect;
    
    public function __construct(){
        try{
            //String de conecção
            $host_connect = $this->engine . ":host=" . ";dbname=" . $this->database;
            //Nova conecção
            $this->connect = new \PDO($host_connect, $this->db_user, $this->db_pass);
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public function beginTransaction(){
        $this->connect->beginTransaction();
    }
    
    public function commit(){
        $this->connect->commit();
    }
    
    public function rollBack(){
        $this->connect->rollBack();
    }
}