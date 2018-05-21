<?php
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
    $page = 'acceuil';
}

ob_start();
if ($page === 'acceuil'){
    require ROOT . "/pages/streemar/acceuil.php";
}elseif($page === 'scoot'){
    require ROOT . "/pages/streemar/scootmobile.php";
}elseif ($page === 'citycoco'){
    require ROOT . "/pages/streemar/citycoco.php";
}elseif ($page === 'login'){
    require ROOT . "/pages/users/login.php";
}elseif($page === 'segway'){
    require ROOT . "/pages/streemar/segway.php";
}elseif ($page === 'pano'){
    require ROOT . "/pages/streemar/panomobile.php";
}elseif ($page === 'ballon'){
    require ROOT . "/pages/streemar/ballonled.php";
}elseif ($page === 'event'){
    require ROOT . "/pages/streemar/event.php";
}elseif($page === 'agence'){
    require ROOT . "/pages/streemar/agence.php";
}elseif ($page === 'ledcar'){
    require ROOT . "/pages/streemar/ledcar.php";
}elseif ($page === 'velo'){
    require ROOT . "/pages/streemar/velomobile.php";
}elseif ($page === 'impression'){
    require ROOT . "/pages/streemar/print.php";
}elseif ($page === 'creation'){
    require ROOT . "/pages/streemar/crea.php";
}elseif ($page === 'xbanner'){
    require ROOT . "/pages/streemar/xbanner.php";
}elseif ($page === 'reference'){
    require ROOT . "/pages/streemar/reference.php";
}elseif ($page === 'contact'){
    require ROOT . "/pages/streemar/contact.php";
}elseif ($page === 'devis'){
    require ROOT . "/pages/streemar/devis.php";
}
$content = ob_get_clean();
if($page==='login')
{
    require ROOT . "/pages/templates/default.php";
}
else{
      require ROOT . "/pages/templates/streemar.php";
}
