<?php

if(App::getInstance()->getTable('Client')->delete(['id'=>$_GET['id']]))
{
    header('Location:admin.php?page=home');
}

?>