<?php
session_start(); // sempre necessario! (se una sessione è già creata, non ne crea un'altra)
$_SESSION = [];
$params = session_get_cookie_params(); //array associativo con i parametri del cookie (servono per cancellare il cookie)

setcookie(session_name(), '', [    //elimina il cookie di sessione dal client(browser) riscrivendo tutti i parametri
    'expires' => time() - 3600,
    'path' => $params['path'],
    'domain' => $params['domain'],
    'secure' => $params['secure'],
    'httponly' => $params['httponly'],
    'samesite' => $params['samesite'] ?? 'Lax'
]);
session_destroy();  // distrugge la sessione (nel server)
echo "Sessione distrutta...torna alla pagina dashboard";