<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 12/11/2016
 * Time: 11:47
 */

namespace App\Table;


use Core\Table\Table;

class BanniereTable extends Table
{
     public function findWithBanID($id){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE banid = ?', array($id), false);
    }
    
    public function extraire($key,$value,$id)
    {
        $records=$this->findWithBanID($id);
        $return=[];
        foreach($records as $v)
        {
            $return[$v->$key]=$v->$value;
        }
        return $return;
    }
    
    public function banniere()// 
    {
        return $this->query('SELECT banniere.id, banniere.image,banniere.titre_accroche,banniere.titre_detail,page.libelle
                             FROM banniere,page
                             WHERE banniere.page_id = page.id'
                           );
    }
    
    public function BanAll($page)// 
    {
        return $this->query('SELECT banniere.id,banniere.image,banniere.titre_accroche,banniere.titre_detail
                             FROM banniere,page
                             WHERE banniere.page_id=page.id AND page.libelle = ?',
            array($page),false);
    }
    
}