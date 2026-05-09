<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$title='content';
?>
<div class="content">
    <h2 class="content"><?= /** @var  $content */
        htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?></h2>
</div>
<?php
require  dirname(__DIR__,3).$appConf['Layout']."footer.php";
?>
