<?php

if(App::getInstance()->getTable('Category')->delete(['id'=>$_GET['id']]))
{
    header('Location:admin.php?page=category.list');
}

?>

