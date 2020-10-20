<?php
session_start();
require_once 'DateBase.php';

$pdo = new DateBase();

$sql = "SELECT `Name`,`Weight`,`Price`,`quantity`,`imagename`,`info`,`ID` FROM product WHERE `ID` = (?) ";
$stmt = $pdo->execute($sql,[$_GET['id']]);
$products = $pdo->SelectProduct();

//$stmt = $pdo->execute($sql, [$_GET['id']]);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Информация о продукте</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
</head>
<body>
<?php echo ("Hello ". $_SESSION['username'].""); ?>
<form action="supplies.php" method="post" enctype="multipart/form-data">
    <button>Склад</button>
</form>
<form action="main_page.php" method="post" enctype="multipart/form-data">
    <button>Главная страница</button>
</form>
<table align="center" width="650px" border="2px" >
    <caption>"<?= $stmt['Name']  ?>" </caption>
    <tbody align="center">
    <tr>
        <td>
            <a>
                <img src="../images/<?= $stmt['imagename'] ?>" alt="error">
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Вес: <?= $stmt['Weight'] ?>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Цена за ед.: <?= $stmt['Price'] ?>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Кол-во: <?= $stmt['quantity'] ?>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Общая стоимость: <?= $stmt['quantity']*$stmt['Price'] ?>
            </p>
        </td>
    </tr>
    <tr>
    <tr>
        <td>
            <p>
                Инфо: <?= $stmt['info']?>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <a href="Order_Form.php?id=<?=$stmt['ID']?>">
                Заказать: <?= $stmt['Price'] ?>
            </a>
        </td>
    </tr>
    </tbody>
</table>
<body/>
</html>
