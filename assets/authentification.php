<?php
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

$adminusername = $_POST['username'];
$adminpassword = md5($_POST['password']);

$requete = "SELECT * FROM administrateurs WHERE username = :username AND password = :password";
$stmt = $conn->prepare($requete);
$stmt->execute(['username' => $adminusername, 'password' => $adminpassword]);
$user = $stmt->fetch();

if($user){
    session_start();
    $_SESSION['username'] = $user['username'];
    $_SESSION['gestion_articles'] = $user['gestion_articles'];
    $_SESSION['gestion_avis'] = $user['gestion_avis'];
    header("Location: ../administration.php?message=succes");
} else {
    header("Location: ../administration.php?message=erreur");
}
?>