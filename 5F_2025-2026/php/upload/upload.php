<?php


$tmpPaths = $_FILES['file']['tmp_name'];
$originalName= basename($_FILES['file']['name']);
$destination = 'uploads/'.$originalName;
move_uploaded_file($tmpPaths,$destination);