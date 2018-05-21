<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 11/11/2016
 * Time: 15:41
 */



use Core\Database\MysqlDatabase;

class App
{
    private static $_instance;
    private $db_instance;

    public $title = "Mon super site";

    private function __Construct()
    {

    }


    public static function load()
    {
        session_start();
        require "vendor/autoload.php";

    }

    public static function getInstance()
    {
        if (empty(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getTable($name)
    {
        $class_name = "\\App\\Table\\" . ucfirst(strtolower($name)) . "Table";
        return new $class_name(strtolower($name), $this->getDB());
    }

    public function getDB()
    {
        $config = \Core\Config::getInstance("config/config.php");
        if (empty($this->db_instance))
        {
            $this->db_instance = new MysqlDatabase($config->get('db_name'),$config->get('db_user'),$config->get('db_host'),$config->get('db_pass'));
        }
        return $this->db_instance;
    }
    
    public function forbidden(){
        
        header('HTTP/1.0 403 Forbidden');
        die('acces interdit');
    }
    
    public function notfound(){
        
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }

}