<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 12/11/2016
 * Time: 11:45
 */

namespace Core\Table;



use Core\Database\MysqlDatabase;

class Table
{

    protected $table ;
    protected $db;

    public function __construct($name, MysqlDatabase  $db)
    {
        $this->db = $db;
        if(empty($this->table))
        {
            $this->table = $name;
        }
    }

    public function all()
    {
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function query($statement, $attributes = null, $one = false ){
        $entity_class_name = str_replace('Table', 'Entity', get_class($this));
        if ($attributes){
            return $this->db->prepare(
                $statement,
                $attributes,
                $entity_class_name,
                $one
            );
        }else{
            return $this->db->query(
                $statement,
                $entity_class_name,
                $one
            );
        }
    }

    public function find($id){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE id = ?', array($id), true);
    }
    
    public function update($id,$data){
        $sql_parts=[];
        $attributes=[];
        foreach($data as $k=>$v){
            $sql_parts[]="$k=?";
            $attributes[]=$v;
        }
        $attributes[]=$id;
        $sql_part=implode(', ', $sql_parts);

        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id=?", $attributes, true);
    }
    
    public function create($data){
        $sql_parts=[];
        $attributes=[];
        foreach($data as $k=>$v){
            $sql_parts[]="$k=?";
            $attributes[]=$v;
        }
        
        $sql_part=implode(', ', $sql_parts);

        return $this->query("INSERT {$this->table} SET $sql_part", $attributes, true);
    }
    
    public function existId($data)
    {
        $sql_parts=[];
        $attributes=[];
        foreach($data as $k=>$v){
            $sql_parts[]="$k=?";
            $attributes[]=$v;
        }
        
        $sql_part=implode(', ', $sql_parts);

        return $this->query("SELECT * FROM {$this->table} WHERE $sql_part", $attributes, true);
    }
    
    public function delete($data)
    {
        $sql_parts=[];
        $attributes=[];
        foreach($data as $k=>$v){
            $sql_parts[]="$k=?";
            $attributes[]=$v;
        }
        
        $sql_part=implode(', ', $sql_parts);

        return $this->query("DELETE FROM {$this->table} WHERE $sql_part", $attributes, true);
    }
    
    // pemet d'avoir une liste d'objet
    public function extrac($key,$value)
    {
        $records=$this->all();
        $return=[];
        foreach($records as $v)
        {
            $return[$v->$key]=$v->$value;
        }
        return $return;
    }
    
}