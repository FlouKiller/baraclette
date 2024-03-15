<?php
session_start();

if (isset($_SESSION["username"])){
    session_destroy();
    header("Location: ../administration.php?message=deconnexion");
} else {
    header("Location: ../index.php");
}
?>