<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$content=$_GET['content'] ?? '';
?>
<h1 class="content"><?=$content?></h1>
<?php
require  dirname(__DIR__,3).$appConf['layouts']."footer.php";

