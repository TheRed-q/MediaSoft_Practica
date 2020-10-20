<?php
require_once 'DateBase.php';

$pdo = new DateBase();

$sql = "SELECT `Name`,`imagename` FROM product WHERE `ID` = (?) ";
$stmt = $pdo->execute($sql,[$_GET['id']]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заказ</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
</head>
<body>

</body>
</html>

<form action="supplies.php" method="post" enctype="multipart/form-data">
    <button>Склад</button>
</form>
<form action="main_page.php" method="post" enctype="multipart/form-data">
    <button>Главная страница</button>
</form>

<form action="Order.php?id=<?= $_GET['id']?>" method="post" enctype="multipart/form-data">
<p><label for="Name">Название продукта: <?= $stmt['Name']   ?><br>
            </p>
 <tr>
     <td>
         <a href="description_product_form.php?id=<?=$stmt['ID'] ?>">
            <img src="../images/<?= $stmt['imagename'] ?>" alt="error">
         </a>
     </td>
 </tr>
<p><label for="quantity">Укажите сколько нужно заказать на склад<br>
            <input class="input" id="quantity" name="quantity" size="80"  type="text" value=""></label></p>
    <input type="submit"><br>

</form>
