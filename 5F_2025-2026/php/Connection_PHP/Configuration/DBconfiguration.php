<?php
//Mettiamo in un file separato la configurazione del database, in modo da poterla modificare facilmente senza dover toccare il codice principale dell'applicazione. In questo modo, se dobbiamo cambiare le credenziali o l'host del database, possiamo farlo in un unico posto senza rischiare di introdurre errori nel resto del codice.
return [
    'dsn' => 'mysql:host=192.168.60.144;dbname=mattia_pavarin_itis;charset=utf8mb4',
    'username' => 'mattia_pavarin',
    'password' =>   'eroiche.scremammo.',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
        ];
