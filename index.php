<?php

// var_dump(__DIR__);
// include __DIR__ . "/./functions.php";

include "./functions.php";

$mailCorrente = $_GET['mail'];
$mailValida = checkMail($mailCorrente);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllo mail</title>
    <style>
        body { background: #222; color: white; font-family: sans-serif; padding: 1rem; }
        * { box-sizing: border-box; padding: 0; margin: 0;}
        h1 { margin-bottom: 0.5rem }
        .is-valid { color: lightgreen; }
        .not-valid { color: crimson; }
    </style>
</head>
<body>

    <h1>Controllo Mail</h1>

    <form action="index.php" method="GET">
        <label for="mail">Mail da validare: </label>
        <!-- Uso il dato ricevuto per popolare l'input (v. value) -->
        <input type="text" name="mail" value="<?php echo $mailCorrente ?>" placeholder="Inserisci la mail" >
        <button type="submit">Invia</button>
        <button type="reset">Cancella</button>
        
        <!-- Recupero la classe da una funzione a cui passo il booleano -->
        <p class="<?php echo getValidClass($mailValida) ?>">Validazione completata</p>

        <!-- Calcolo la classe con un ternario -->
        <p class="<?php echo ($mailValida) ? "is-valid" : "not-valid" ?>">Validazione completata</p> 
        
        <!-- Stampo "NON" solo se il booleano è falso -->
        <p>La mail <?php if(!$mailValida) echo "NON" ?> è valida</p>
        <p>La mail <?php echo ($mailValida) ? "" : "NON" ?> è valida</p>
        
        <!-- Stampo messaggi diversi in base al booleano -->
        <?php if($mailValida){ ?>
            <p>La mail è valida</p>
        <?php } else { ?>
            <p>La mail NON è valida</p>
        <?php } ?>

    </form>
    
</body>
</html>