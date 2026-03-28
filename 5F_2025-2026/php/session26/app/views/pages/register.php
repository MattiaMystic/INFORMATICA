<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'requireconfig.php';$appConf=requireHeader();
$content=$_GET['content'] ?? '';
?>

<div class="content">
<h1><?=$content?></h1>
<form method="post" action="../../action/actionregister.php">
    <label>Username:</label><br>
    <label>
        <input type="text" name="username">
    </label><br><br>
    <label>Password:</label><br>
    <label>
        <input type="password" name="passwordChiara">
    </label><br><br>
    <button type="submit">Register</button>
</form>
</div>
<?php
require  dirname(__DIR__,3).$appConf['layouts']."footer.php";
