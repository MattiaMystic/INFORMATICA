<?php

$num = 10;
if( $num>0){

    //echo "Numero negativo non consentito";
    header("Location: error_page.php?msg=Numero negativo non consentito" );

}
