<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="cognome">Cognome:</label>
    <input type="text" id="cognome" name="cognome" required><br><br>

    <label for="file">File:</label>
    <input type="file" id="file" name="file" required><br><br>
    <input type="submit" value="Carica">
</form>

</body>
</html>
