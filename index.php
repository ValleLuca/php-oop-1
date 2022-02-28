<?php
require_once __DIR__.'/classes/Movie.php';

$utente = new Movie("Luca", "Valle");

$NomeCognome = $utente->getNomeCognome();
$Data = $utente->getData();
$Classe = $utente->getClasse();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Stampato</title>
</head>
<body>
    
    <div>
        <h2><?php echo $NomeCognome; ?></h2>
        <p>Nell'anno: <?php echo $Data; ?>, nella classe <?php echo $Classe; ?></p>
    </div>

</body>
</html>