<?php
require_once 'DateBase.php';
session_start();
$pdo = new DateBase();


if (!file_exists("images"))
{
    mkdir("images", 0777,true);
}

$filename = date_create_from_format('U.u' , microtime(true))->format('Y_m_d_H_i_s_u');
$ext = explode(".", $_FILES['images']['name']);
$ext = array_pop($ext);
$filename = $filename . "." . $ext;

move_uploaded_file($_FILES['images']['tmp_name'], "images/$filename");
$Name = $_POST['Name'];
$Weight = $_POST['Weight'];
$Price = $_POST['Price'];
$quantity = $_POST['quantity'];
$imagename = $_POST['imagename'];
$info = $_POST['info'];
$type = $_POST['type'];

//$pdo->Insert([$filename,$_SESSION['username'],$Name,$Weight,$Price,$quantity]);
$pdo->Insert([$filename,$_SESSION['username'],$Name,$Weight,$Price,$quantity,$info,$type]);
header('Location: /supplies.php');