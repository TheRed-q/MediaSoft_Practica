<?php


require_once 'DateBase.php';

session_start();

$pdo = new DateBase();


$username = $_POST['username'];
$password = $_POST['password'];



//$stmt = $pdo->query("SELECT * FROM registration WHERE `Login` = :username AND `Password` = :password");
$sql = "SELECT * FROM registration WHERE `Login` ='$username'  AND `Password` = '$password'";

//$stmt = $pdo->query($sql,[$username,$password]);
$stmt = $pdo->query($sql);
$count = $stmt->rowCount();
if ($count == 1) {
    //echo "GOVNO";
    $_SESSION['username'] = $username;
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    header("Location:/main_page.php");
}
else{
    echo $error = "Error connection";
}






