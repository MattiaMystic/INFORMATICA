<?php
require dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'requireconfig.php';
$appConf=requireHeader();
$title='Reviews';
?>
<div class="content">
    <br>
    <br>
    <table>
        <tr>
            <th>Tablet Id</th>
            <th>Tablet Model</th>
            <th>Reviewer Name</th>
            <th>Rating</th>
            <th>Comment</th>
            <th>Review Date</th>
        </tr>
        <?php
        /** @var $reviews $tablet */
        foreach ($reviews as $review) {
        echo "<tr>
            <td>" . htmlspecialchars($review['tablet_id'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($review['model'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($review['reviewer_name'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($review['rating'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($review['comment'], ENT_QUOTES, 'UTF-8') . "</td>
            <td>" . htmlspecialchars($review['review_date'], ENT_QUOTES, 'UTF-8') . "</td>            
        </tr>";
        }
        echo "</table></div>";
        require  dirname(__DIR__,3).$appConf['Layout']."footer.php";
    ?>

