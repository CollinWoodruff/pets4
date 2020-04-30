<?php
/**
 * Created by PhpStorm.
 * User: Chunhai Yang / Collin Woodruff
 * Date: 4/29/2020
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

session_start();

//Create an instance of the Base Class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/petHome.html');
});

$f3->route('GET|POST /order', function() {
    var_dump($_POST);
    $view = new Template();
    echo $view->render('views/order.html');
});

//Run fat free
$f3->run();