<?php
session_start();
$content = "Ciao ".($_SESSION['username'] ?? '').' benvenuto nella pagina';
$appConf= require dirname(__DIR__,3).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'appconfig.php';
$pages=$appConf['pages'];
$path=$appConf['css'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--link href="../../../public/css/mystyle.css" rel="stylesheet"-->
    <link href="<?=$path?>mystyle.css" rel="stylesheet">
    <title><?php echo basename($_SERVER['PHP_SELF'])?></title>
</head>
<body>
<div class="wrapper">
        <div class="container">
            <a href="/index.php?content=<?=$content?> index">Index</a>
            <?php if(empty($_SESSION['username'])): ?>
            <a href="<?=$pages?>register.php?content=<?= $content?> di registrazione">Register</a>
            <?php endif ?>
            <?php if(empty($_SESSION['username'])): ?>
            <a href="<?=$pages?>login.php?content=<?= $content?> di login">Login</a>
            <?php endif ?>
            <a href="<?=$pages?>page1.php?content=<?= $content?>1">Page1</a>
            <a href="<?=$pages?>page2.php?content=<?= $content?>2">Page2</a>
            <a href="<?=$pages?>page3.php?content=<?= $content?>3">Page3</a>
            <?php if(!empty($_SESSION['username'])): ?>
            <a href="../pages/logout.php?content=<?= $content?> di logout">Logout</a>
            <?php endif ?>
        </div>



