<?php

if(App::getInstance()->getTable('Medias')->delete(['id'=>$_GET['id']]))
{
    header('Location:admin.php?page=medias.list');
}

?>

