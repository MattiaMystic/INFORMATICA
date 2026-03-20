<?php
$var= "ciao";//Visualizza una variabile sola il ?=
$num =10;
$pos = "Numero maggiore di 0";
$neg = "Numero minore di 0";
$materie= ['informatica', 'gpoi', 'tpsit','sistemi'];
$message = "Ciao sono un js";
$studenti = [ //array di array associativi
    //lo visualizzo un elemento su html cosi: <p><?=$studenti[0]["nome"]?..
    [
        'nome' => 'Mattia',
        'cognome' => 'Pavarin',
        'media' => 7

    ],
    [
        'nome' => 'Enrico',
        'cognome' => 'Prearo',
        'media' => 8
    ],
    [
        'nome' => 'Francesco',
        'cognome' => 'Bazaj',
        'media' => 10
    ]
]



?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p>Ciao sono sull'html</p>
<p><?php echo $var ?></p>
<p><?= $var ?></p>
<?php if($num>0):?>
<h1><?= $pos ?></h1>
<?php else: ?>
<h1><?php $neg ?> </h1>
<?php endif; ?>
<?php foreach ($materie as $item):?>
<p><?= $item ?> </p>
    <hr>
    <?php endforeach; ?>

<table>

    <tr>
        <?php foreach ($studenti[0] as $key => $value):?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
    </tr>


    <?php foreach ($studenti as $s): ?>
        <tr>
            <?php foreach ( $s as $item): ?>
                <td><?= $item ?> </td>
            <?php endforeach; ?>

        </tr>
    <?php endforeach; ?>

</table>

<?php while($num>0): ?>
<p><?= $num--?></p>
<?php endwhile; ?>
<button id = "mybutton">PREMI</button>

<footer>
    <p>&copy; 2025
        <a href="https://github.com/MattiaMystic" target="_blank" id="nameColor">Mattia Pavarin</a>
</footer>
<script>message = <?= json_encode($message)?></script>
<script src="script.js"></script>
</body>
</html>
