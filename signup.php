<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'DateBase.php';

$pdo = new DateBase();
$sql = "";
$stmt = $pdo -> query("SELECT * FROM registration WHERE `Login` = '$username' ");

$count = $stmt -> rowCount();

if($count > 0){
    echo 'Данный логин уже занят';
}
else {
    $pdo->InsertUser([$full_name,$email,$username,$password]);
    header("Location:../login.php");
}