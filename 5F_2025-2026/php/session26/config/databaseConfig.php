<?php   //parametri di configurazione per la connessione al database creato con DBeaver
return [
    'dns' => 'mysql:host=192.168.60.144;dbname=mattia_pavarin_itis_users_26',   //Data Source Name
    'username' => 'mattia_pavarin',
    'password' => 'eroiche.scremammo.',
    'options' => [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
];
