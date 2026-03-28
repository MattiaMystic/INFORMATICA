<?php

session_start(); // avvia la sessione e creando il cookie di sessione

$_SESSION['username'] = 'Mario'; // salvo un dato (nella realtà il dato sarà dinamico...)

echo "Sessione creata. Vai a dashboard.php";