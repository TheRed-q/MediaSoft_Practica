<?php
require_once 'DateBase.php';
session_start();
$pdo = new DateBase();
$images = $pdo ->SelectImages();
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
    <title>Личный кабинет</title>
    <link href="assets/css/main.css" media="screen" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='assets/css'>
</head>
<body>
<table align="center" width="650px" border="2px">
    <tbody align="center">
    <?php foreach ($images as $image){?>
        <tr>
            <td>
                <a href="">
                    <img src="../images/<?= $image['name'] ?>" alt="error">
                </a>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>
</body>
</html>



<!--форма для закгрузки изображения-->
<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка</title>
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
<p><label for="Weight">Вес за ед продукта<br>
            <input class="input" id="Weight" name="Weight" size="32"  type="text" value=""></label></p>
<p><label for="Price">Цена за ед продукта<br>
            <input class="input" id="Price" name="Price" size="32"  type="text" value=""></label></p>
<p><label for="quantity">Кол-во продукта<br>
            <input class="input" id="quantity" name="quantity" size="32"  type="text" value=""></label></p>

    <br><input type="file" name="images">
    <input type="submit"><br>
</form>

</body>
</html>
-->