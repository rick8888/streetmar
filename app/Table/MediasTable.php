<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 12/11/2016
 * Time: 11:47
 */

namespace App\Table;


use Core\Table\Table;

class MediasTable extends Table
{
    
    public function findWithPageID($id){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE page_id = ?', array($id), false);
    }
    public function ext($key,$value,$id)
    {
        $records=$this->findWithPageID($id);
        $return=[];
        foreach($records as $v)
        {
            $return[$v->$key]=$v->$value;
        }
        return $return;
    }
    public function mediasclient()
    {
        return $this->query('SELECT client.nom,medias.image,medias.image_small 
                             FROM client
                             LEFT JOIN medias ON client.id = medias.client_id');
    }
    public function servicesmedias($service)// 
    {
        return $this->query('SELECT subcategory.subcategory,medias.image,medias.image_small,medias.image_path
                             FROM subcategory
                             LEFT JOIN medias ON subcategory.id = medias.subcategory_id
                             WHERE subcategory.subcategory = ?',
            array($service),false);
    }
    
    public function medias()// 
    {
        return $this->query('SELECT subcategory.id, subcategory.subcategory,medias.image,
                             medias.image_small,medias.adresse_video,medias.image_path, client.nom, page.libelle
                             FROM subcategory, medias, client, page
                             WHERE subcategory.id = medias.subcategory_id and medias.client_id=client.id and medias.page_id=page.id'
                           );
    }
    
}