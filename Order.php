<?php
require_once 'DateBase.php';

$pdo = new DateBase();
$_POST['quantity'];
$_GET['id'];
$sql = 'UPDATE product SET quantity = quantity + (?) WHERE ID = (?)';
$pdo->update($sql,[$_POST['quantity'],$_GET['id']]);
header("Location:/supplies.php");