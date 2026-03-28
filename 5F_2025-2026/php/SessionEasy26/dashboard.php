<?php
session_start(); // sempre necessario! (se una sessione è già creata, non ne crea un'altra)

if (isset($_SESSION['username'])) {
    echo "Ciao " . $_SESSION['username'];  //accedo al dato della sessione
} else {
    echo "Nessuna sessione trovata";
}