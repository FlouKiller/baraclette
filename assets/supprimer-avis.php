<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$servername;dbname=baraclette;charset=utf8;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}

if (isset($_SESSION["username"])){
    $id = $_GET["id"];
    $requete = "DELETE FROM avis WHERE id=:id";
    $stmt = $conn->prepare($requete);
    $stmt->execute(['id' => $id]);
    header("Location: ../avis.php");
} else {
    header("Location: ../index.php");
}
?>