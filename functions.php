<?php

//Per una stringa fornita controllo la presenza di "@" e "."
//Se non presenti restituisco false
function checkMail($mail) {
    $result = false;

    if( strlen($mail)>=5 && str_contains($mail, "@") && str_contains($mail, ".") ) {
        $result = true;
    }

    return $result;
}

//Restituisco una classe in base al booleano ricevuto
function getValidClass($valid) {
    $result = "not-valid";

    if($valid) {
        $result = "is-valid";
    }

    return $result;
}

?>