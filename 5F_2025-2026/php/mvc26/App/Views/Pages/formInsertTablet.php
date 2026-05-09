<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$baseUrl = $appConf['baseURL'].$appConf['prjName'];

$title='Insert tablet';
?>
<div class="content">
    <h2>Inserisci nuovo tablet</h2>
    <form action="<?=$baseUrl?>insert/tablet" method="post">
        <div>
            <label for="brand">Brand:</label><br>
            <input type="text" id="brand" name="brand" required>
        </div>
        <br>
        <div>
            <label for="model">Model:</label><br>
            <input type="text" id="model" name="model" required>
        </div>
        <br>
        <div>
            <label for="screensize">Screen Size (inches):</label><br>
            <input type="number" id="screensize" name="screensize" step="0.1" min="0">
        </div>
        <br>
        <div>
            <label for="storageGB">Storage (GB):</label><br>
            <input type="number" id="storageGB" name="storageGB" min="0">
        </div>
        <br>
        <div>
            <label for="ramGB">RAM (GB):</label><br>
            <input type="number" id="ramGB" name="ramGB" min="0">
        </div>
        <br>
        <div>
            <label for="os">Operating System:</label><br>
            <input type="text" id="os" name="os">
        </div>
        <br>
        <div>
            <label for="price">Price (€):</label><br>
            <input type="number" id="price" name="price" step="0.01" min="0">
        </div>
        <br>
        <div>
            <label for="releaseDate">Release Date:</label><br>
            <input type="date" id="releaseDate" name="releaseDate">
        </div>
        <br>
        <input type="submit" value="invia">
    </form>
</div>
<?php
require  dirname(__DIR__,3).$appConf['Layout']."footer.php";
