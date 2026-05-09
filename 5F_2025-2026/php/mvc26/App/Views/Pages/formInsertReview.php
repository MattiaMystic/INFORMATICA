<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$baseUrl = $appConf['baseURL'].$appConf['prjName'];

$title='Insert review';
?>
<div class="content">
    <h2>Inserisci nuova review</h2>
    <form action="<?=$baseUrl?>insert/review" method="post">
        <div>
            <label for="tablet_id">Select tablet:</label><br>
            <select name="tablet_id" id="tablet_id" required>
                <option value="">-- Select a tablet --</option>
                <?php /** @var $modelBrand */
                foreach ($modelBrand as $item): ?>
                    <option value="<?=(int)$item['id']?>">
                        <?= htmlspecialchars($item['brand'], ENT_QUOTES, 'UTF-8') ?>
                        -
                        <?= htmlspecialchars($item['model'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div>
            <label for="reviewer_name">Review name:</label><br>
            <input type="text" id="reviewer_name" name="reviewer_name" required>
        </div>
        <br>
        <div>
            <label for="comment">Message:</label><br>
            <textarea id="comment" name="comment" rows="5" cols="40"></textarea><br>
        </div>
        <br>
        <div>
            <label for="rating">Rating (1 to 5):</label><br>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
        </div>
        <br>
        <input type="submit" value="invia">
    </form>
</div>
<?php
require  dirname(__DIR__,3).$appConf['Layout']."footer.php";
