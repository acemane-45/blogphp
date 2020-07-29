<?php
require '../app/Autoloader.php';
\App\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];

}else{
    $p = 'home';
}

// initialisation des objets
$db = new App\Database('atdm');

ob_start();
if($p === 'home') {
    require '../pages/home.php';

}elseif ($p === 'article') {
    require '../pages/article.php';
}
$content = ob_get_clean();

require '../pages/templates/default.php';