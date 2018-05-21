<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 10/11/2016
 * Time: 12:30
 */

namespace Core\Database;

use \PDO;


class MysqlDatabase extends Database
{

    private $db_name;
    private $db_user;
    private $db_host;
    private $db_pass;

    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct($db_name, $db_user='root', $db_host = 'mysqlserver', $db_pass = 'docker')
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_name = $db_name;
        $this->db_pass = $db_pass;
    }

    private function getPDO()
    {
        if($this->pdo === null){
            $pdo = new PDO("mysql:dbname=". $this->db_name .";host=". $this->db_host , $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $className = null, $one = false)
    {
        $pdo = $this->getPDO();
        $res = $pdo->query($statement);
        
        if(
            strpos($statement, 'UPDATE')===0||
            strpos($statement, 'DELETE')===0||
            strpos($statement, 'INSERT')===0
          ){return $res;}
        
        if ($className === null)
        {
            $res->setFetchMode(PDO::FETCH_OBJ);
            
        }
        else
        {
            $res->setFetchMode(PDO::FETCH_CLASS, $className);
        }
        if ($one)
        {
            $data = $res->fetch();
        } else
        {
            $data = $res->fetchAll();
        }
        return $data;

    }

    public function prepare($statement, $param, $class_name, $one = false)
    {
        $pdo = $this->getPDO();
        $req = $pdo->prepare($statement);
        $res=$req->execute($param);
        if(
            strpos($statement, 'UPDATE')===0||
            strpos($statement, 'DELETE')===0||
            strpos($statement, 'INSERT')===0
          ){return $res;}
        if ($class_name === null)
        {
            $req->setFetchMode(PDO::FETCH_OBJ);
        }
        else
        {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one){
            $data = $req->fetch();
        }
        else{
            $data = $req->fetchAll();
        }


        return $data;
    }
    
}