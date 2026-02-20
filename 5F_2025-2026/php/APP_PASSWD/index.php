<?php
$pswd = "123456789";

$hash = password_hash($pswd, PASSWORD_DEFAULT);
echo "Hash: " . $hash . "<br>";
echo strlen($hash);

$pswd = "123456";// Wrong password

if(password_verify($pswd, $hash)){
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}