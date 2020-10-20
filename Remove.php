<?php
require_once 'DateBase.php';

$pdo = new DateBase();
$_POST['quantity'];
$_GET['id'];

$proverka = $_POST['quantity'];
$sql1 = "SELECT `quantity`FROM product WHERE `ID` = (?) ";

$proverka1 = $pdo->execute($sql1,[$_GET['id']]);
$proverka1 = $proverka1['quantity'];


$prom = (int)$proverka1 - $proverka;
if((int)$prom >= 0 ){
    $sql = 'UPDATE product SET quantity = quantity - (?) WHERE ID = (?)';
    $pdo->update($sql,[$_POST['quantity'],$_GET['id']]);
    //var_dump();
}
else{

}
header("Location:/supplies.php");