<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$title='news';
?>
<div class="content">
    <p><?=/**@var $content*/$content?></p>
</div>
<?php
require  dirname(__DIR__,3).$appConf['Layout']."footer.php";
?>