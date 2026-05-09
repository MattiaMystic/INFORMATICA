<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$title='home';
?>
<div class="content">
    <p><?= /** @var $content */
        htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?></p>
</div>
<?php
require  dirname(__DIR__,3).$appConf['Layout']."footer.php";
?>
