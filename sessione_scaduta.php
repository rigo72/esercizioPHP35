<?php
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1 style='text-align:center; color:red;'>SESSIONE SCADUTA</h1> <br> <a href='pagina_login.html'>Torna alla pagina di login</a>";
    ?>
</body>
</html>