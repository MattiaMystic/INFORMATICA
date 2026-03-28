<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$content=$_GET['content']  ?? '';
$conf=require dirname(__DIR__,3).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'appconfig.php';
$path = $conf['action'];
?>
<div class="content">
<h1><?=$content?></h1>
<form method="post" action="<?=$path?>actionlogout.php">
        <button type="submit">Logout</button>
</form>
</div>
<?php
require  dirname(__DIR__,3).$appConf['layouts']."footer.php";
?>
