<?php
/*boostrap script*/
use App\Core\DBconn;

$appConfig= require 'Config'.DIRECTORY_SEPARATOR.'appConfig.php';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(!($url)) {
    http_response_code(404);
    die('Page not found');
}
$method =$_SERVER['REQUEST_METHOD'];
/* Static asset lookup */
$file = __DIR__ . $url;
if ($url !== '/' && file_exists($file)) {
    return false;
}

$prjName = trim($appConfig['prjName'],'\\');
$url=trim(str_replace($prjName,'',$url),'/');

/* Database connection */
require "App".DIRECTORY_SEPARATOR."Core".DIRECTORY_SEPARATOR."DBconn.php";
$dataBaseConfig= require "Config/databaseConfig.php";
$db = DBconn::getDB($dataBaseConfig);

require 'Router'.DIRECTORY_SEPARATOR.'Router.php';
$routerClass = new \Router\Router();
/* GET routes */
$routerClass->addRoute('GET','','HomeController','homePagePresentation');
$routerClass->addRoute('GET','home/index','HomeController','homePagePresentation');
$routerClass->addRoute('GET','show/tablet','TabletController','showAllTablet');
$routerClass->addRoute('GET','show/reviews','ReviewController','showAllReviews');
$routerClass->addRoute('GET','home/services','ServiceController','servicePresentation');
$routerClass->addRoute('GET','form/insert/tablet','TabletController','formInsertOneTablet');
$routerClass->addRoute('GET','form/insert/review','ReviewController','formInsertOneReview');

/* POST routes */
$routerClass->addRoute('POST','insert/tablet','TabletController','insertOneTablet');
$routerClass->addRoute('POST','insert/review','ReviewController','insertOneReview');

$reValue=$routerClass->match($url,$method);
if(empty($reValue)) {
    http_response_code(404);
    die('Page not found');
}
$controller= 'App'.DIRECTORY_SEPARATOR.'Controller'.DIRECTORY_SEPARATOR.$reValue['controller'];
$action = $reValue['action'];
require $controller.".php";
$controllerClass= 'App\Controller\\'.$reValue['controller'];
$controllerObj = new $controllerClass($db);
$controllerObj->$action();


