<?php
use Core\Auth\DBAuth;
//settings for xdebug reporting error
ini_set('xdebug.collect_vars', 'on');
ini_set('xdebug.collect_params', '4');
//ini_set('xdebug.dump_globals', 'on');
//ini_set('xdebug.dump.SERVER', 'REQUEST_URI');
ini_set('xdebug.show_local_vars', 'on');

//Error reporting
error_reporting(E_ALL);

define('ROOT', __DIR__);

require "app/App.php";
App::load();

if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

// Auth
$app=App::getInstance();
$auth=new DBAuth($app->getDb());

if(!$auth->logged()){
    
    $app->forbidden();
}

ob_start();
if ($page === 'home'){
    require ROOT . "/pages/admin/clients/index.php";
}elseif($page === 'client.edit'){
    require ROOT . "/pages/admin/clients/editer.php";
}elseif($page === 'clients.add'){
    require ROOT . "/pages/admin/clients/add.php";
}elseif ($page === 'client.delete'){
    require ROOT . "/pages/admin/clients/delete.php";
}elseif ($page === 'category.list'){
    require ROOT . "/pages/admin/categories/index.php";
}elseif($page === 'category.edit'){
    require ROOT . "/pages/admin/categories/edit.php";
}elseif($page === 'category.delete'){
    require ROOT . "/pages/admin/categories/delete.php";
}elseif($page === 'category.add'){
    require ROOT . "/pages/admin/categories/add.php";
}
elseif($page === 'subcategory.add'){
    require ROOT . "/pages/admin/subcategories/add.php";
}elseif ($page === 'subcategory.list'){
    require ROOT . "/pages/admin/subcategories/index.php";
}elseif($page === 'subcategory.edit'){
    require ROOT . "/pages/admin/subcategories/edit.php";
}elseif($page === 'subcategory.delete'){
    require ROOT . "/pages/admin/subcategories/delete.php";
}
elseif($page === 'medias.add'){
    require ROOT . "/pages/admin/medias/add.php";
}elseif ($page === 'medias.list'){
    require ROOT . "/pages/admin/medias/index.php";
}elseif($page === 'medias.edit'){
    require ROOT . "/pages/admin/medias/edit.php";
}elseif($page === 'medias.delete'){
    require ROOT . "/pages/admin/medias/delete.php";
}elseif($page === 'medias.test'){
    require ROOT . "/pages/admin/medias/test.php";
}
elseif ($page === 'ban.list'){
    require ROOT . "/pages/admin/banniere/index.php";
}elseif($page === 'ban.edit'){
    require ROOT . "/pages/admin/banniere/edit.php";
}elseif($page === 'ban.add'){
    require ROOT . "/pages/admin/banniere/add.php";
}
elseif ($page === 'contenus.list'){
    require ROOT . "/pages/admin/contenus/index.php";
}elseif($page === 'contenus.edit'){
    require ROOT . "/pages/admin/contenus/edit.php";
}elseif($page === 'contenus.add'){
    require ROOT . "/pages/admin/contenus/add.php";
}


$content = ob_get_clean();
require ROOT . "/pages/templates/default.php";
