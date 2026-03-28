<?php
$appConf= require __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'appconfig.php';
require __DIR__.DIRECTORY_SEPARATOR.$appConf['layouts'].'header.php';
$content=$_GET['content'] ?? '';
?>
<h1 class="content"><?=$content?></h1>
<?php
require  __DIR__.$appConf['layouts']."footer.php";
?>
