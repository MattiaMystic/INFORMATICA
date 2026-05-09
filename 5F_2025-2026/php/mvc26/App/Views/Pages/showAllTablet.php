<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$title='Tablet';
?>
<div class="content">
    <br>
    <br>
    <table>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Screen Size</th>
            <th>Storage (GB)</th>
            <th>RAM (GB)</th>
            <th>OS</th>
            <th>Price ($)</th>
            <th>Release Date</th>
        </tr>

        <?php
        /** @var $tablets $tablet */
        foreach ($tablets as $tablet) {
        echo "<tr>
            <td>" . htmlspecialchars($tablet['brand'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($tablet['model'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($tablet['screensize'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($tablet['storageGB'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($tablet['RAMGB'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($tablet['OS'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($tablet['price'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($tablet['releaseDate'], ENT_QUOTES, 'UTF-8') . "</td>
        </tr>";
        }
        echo "</table></div>";
        require  dirname(__DIR__,3).$appConf['Layout']."footer.php";
    ?>

