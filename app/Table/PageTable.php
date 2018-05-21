<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 12/11/2016
 * Time: 11:47
 */

namespace App\Table;


use Core\Table\Table;

class PageTable extends Table
{
        public function findbylibelle($page){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE libelle = ?', array($page), true);
    }
}