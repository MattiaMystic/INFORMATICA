<?php
$appConf= require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'appConfig.php';
$baseUrl = $appConf['baseURL'].$appConf['prjName'];
$path=$appConf['Style'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=$path?>mystyle.css">
    <title><?= htmlspecialchars($title ?? 'Tablet Store', ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <a href="<?=$baseUrl?>home/index">HomePage</a>
        <a href="<?=$baseUrl?>show/tablet">ShowTablet</a>
        <a href="<?=$baseUrl?>show/reviews">ShowReviews</a>
        <a href="<?=$baseUrl?>home/services">ServicePage</a>
        <a href="<?=$baseUrl?>form/insert/tablet">InsertTablet</a>
        <a href="<?=$baseUrl?>form/insert/review">InsertReview</a>
    </div>


