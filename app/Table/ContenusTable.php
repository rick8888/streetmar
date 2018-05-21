<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 12/11/2016
 * Time: 11:47
 */

namespace App\Table;


use Core\Table\Table;

class ContenusTable extends Table
{
    public function contenupage($page)// 
    {
        return $this->query('SELECT contenus.titre,contenus.contenu, page.libelle
                             FROM contenus
                             LEFT JOIN page ON page.id = contenus.page_id
                             WHERE page.libelle = ?',
            array($page),false);
    }
    public function contenu()// 
    {
        return $this->query('SELECT contenus.id, contenus.titre,contenus.contenu, page.libelle
                             FROM contenus
                             LEFT JOIN page ON page.id = contenus.page_id'
                           );
    }
       
}