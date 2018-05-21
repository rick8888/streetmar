<?php
/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 12/11/2016
 * Time: 11:47
 */

namespace App\Table;


use Core\Table\Table;

class ClientTable extends Table
{
    public function clients()// 
    {
        return $this->query('SELECT client.id, client.nom, medias.image, medias.image_small, medias.image_path
                             FROM client, medias
                             WHERE client.id = medias.client_id'
                           );
    }
    public function distinct()
    {
        return $this->query('SELECT distinct(client.nom)
                             FROM client, medias
                             WHERE  client.id=medias.client_id
                            '
                           );
    }
}