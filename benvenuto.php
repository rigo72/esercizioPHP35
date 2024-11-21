<?php
    session_start();
    if(!isset($_SESSION["tempoInizio"])){
        $_SESSION["tempoInizio"] = time();
    }elseif(time() - $_SESSION["tempoInizio"] > 20){
        header("Location: sessione_scaduta.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;">
    <h1>Benvenuto!</h1>
    <h2>Cognome: Gori</h2>
    <h2>Nome: Mattia</h2>
    <h2>27/11/2006</h2>
    <?php
        echo date('l jS \of F Y h:i:s A');
    ?>
    <br><button><a href="script_logout.php" style="text-decoration:none;">LOGOUT</a></button>
</body>
</html>