<?php

if(App::getInstance()->getTable('Subcategory')->delete(['id'=>$_GET['id']]))
{
    header('Location:admin.php?page=subcategory.list');
}

?>

