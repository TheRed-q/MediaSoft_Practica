<?php
require_once 'DateBase.php';

$pdo = new DateBase();
$_POST['quantity'];
$_GET['id'];

$sql = "DELETE FROM product WHERE `ID` = (?)";
$pdo->delete($sql,[$_GET['id']]);
header("Location:/supplies.php");