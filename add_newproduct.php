<?php
session_start();
require_once 'DateBase.php';
$pdo = new DateBase();
$images = $pdo ->SelectImages();
$products = $pdo->SelectProduct();
//session_start();
//$sql = "SELECT * FROM registration";
//$stmt = $pdo->executeAll($sql,['Login','Password']);

//цикл для вывода
//$i = 0;
//while($stmt[$i]['ID'] != 0  ){
// echo ($stmt[$i]['Login'].PHP_EOL),($stmt[$i]['Password'].PHP_EOL);
// echo "<br>";
//   $i++;
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить товар</title>
    <link href="assets/css/main.css" media="screen" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='assets/css'>
</head>
<body>

<form action="main_page.php" method="post" enctype="multipart/form-data">
    <button>Главная</button>
</form>

<form action="image_load.php"  method="post" enctype="multipart/form-data">
<p><label for="Name">Название продукта<br>
            <input class="input" id="Name" name="Name" size="32"  type="text" value=""></label></p>
<p><label for="type">Тип продукта<br>
            <input class="input" id="type" name="type" size="32"  type="text" value=""></label></p>
<p><label for="Weight">Вес ед. продукта<br>
            <input class="input" id="Weight" name="Weight" size="32"  type="text" value=""></label></p>
<p><label for="Price">Цена за ед продукта<br>
            <input class="input" id="Price" name="Price" size="32"  type="text" value=""></label></p>
<p><label for="quantity">Кол-во продукта<br>
            <input class="input" id="quantity" name="quantity" size="32"  type="text" value=""></label></p>
    <p><label for="info">Описание<br>
            <textarea cols="100px" rows="5px" id="info" name="info"></textarea>
    <br><input type="file" name="images">
    <input type="submit"><br>
</form>

</body>
</html>

