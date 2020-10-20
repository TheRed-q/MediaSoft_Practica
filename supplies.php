<?php

require_once 'DateBase.php';

session_start();

$pdo = new DateBase();
$products = $pdo->SelectProduct();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Склад</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
</head>
<body>

<?php echo ("Hello " . $_SESSION['username']." "); ?>
<a href = 'logout.php' class = btn-primary'>Logout </a>
        <form action="supplies.php" method="post" enctype="multipart/form-data">
            <button>Склад</button>
        </form>
        <form action="main_page.php" method="post" enctype="multipart/form-data">
            <button>Главная страница</button>
        </form>
        <?php foreach ($products as $product){?>
        <table align="center" width="650px" border="2px" >
            <caption>"<?= $product['Name']  ?>" </caption>
            <tbody align="center">
            <tr>
                <td>
                    <a href="description_product_form.php?id=<?=$product['ID'] ?>">
                        <img src="../images/<?= $product['imagename'] ?>" alt="error">
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        Тип: <?= $product['type_ofproduct'] ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        Вес в гр.: <?= $product['Weight'] ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        Цена за ед.: <?= $product['Price'] ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        Кол-во на складе: <?= $product['quantity'] ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        Общая стоимость: <?= $product['quantity']*$product['Price'] ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="Order_Form.php?id=<?=$product['ID'] ?>">
                        Заказать: <?= $product['Price'] ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="Remove_Form.php?id=<?=$product['ID'] ?>">
                        Списание
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <?php if ($_SESSION['username'] == 'admin' ){?>
                    <p>
                        <a href="delete_product_form.php?id=<?=$product['ID']?>">
                            <img src="/icon/add.png">
                            <span style="margin-left:5px;">Удалить продукт из БД</span></a>
                    </p>
                    <? }?>
                    <?php } ?>
                </td>
            </tr>

            </tbody>
        </table>
</body>
</html>