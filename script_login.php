<?php
    session_start();
?>
    <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username == "admin" && $password == "1234"){
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location: benvenuto.php");
        }else{
            header("Location: errore.php");
        }
        if($username == "NULL" && $password == "NULL"){
            header("Location: errore.php");
        }
    ?>