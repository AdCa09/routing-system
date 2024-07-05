<?php

include './includes/header.php';

?>

<?php


require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/controller/siteController.php';

use Src\Router;
use Src\Controllers\SiteController;


$router = new Router();


$router->add('GET', '/', [SiteController::class, 'home']);
$router->add('GET', '/about', [SiteController::class, 'about']);


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$router->dispatch($path);
?>

<?php

include './includes/footer.php';