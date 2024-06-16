<?php 
include("config.php"); 
session_start();
ob_start(); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recep Günden</title>
</head>
<body>
    <?php
        $git = isset($_GET["git"]) ? $_GET["git"] : 'home';

        switch($git){
            case "login":
                include("login.php");
                break;
            case "signout":
                include("signout.php");
                break;
            default:
                include("home.php");
                break;
        }
    ?>
</body>
</html>
