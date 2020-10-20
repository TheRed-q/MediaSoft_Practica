<?php
session_start();
if ($_SESSION['username'] == 'admin' ){
    echo "Вы вошли с правами Admin";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link href="assets/css/main.css" media="screen" rel="stylesheet">
<body>
<div class="container mmainpage">
    <div id="Main">
        <h1>Стартовая страница</h1>
        <?php echo ($_SESSION['username']."");?>
        <?php if ($_SESSION['username']==""){?>
        <a href = 'login.php' class = btn-primary'>Войти </a>
            <?php }else{?>
            <a href = 'logout.php' class = btn-primary'>Выйти </a>
                    <?php }?>
                    <form action="register.php" method="post"enctype="multipart/form-data">
                        <p class="submit"><input class="button" type="submit" value="Зарегистрироваться"></p>
                    </form>

                    <form action="login.php" method="post"enctype="multipart/form-data">
                        <p class="submit"><input class="button" type="submit" value="Войти в аккаунт"></p>
                    </form>
                    <form action="personal_area.php" method="post"enctype="multipart/form-data">
                        <p class="submit"><input class="button" type="submit" value="Личный кабинет"></p>
                    </form>
                    <form action="supplies.php" method="post" enctype="multipart/form-data">
                        <p class="submit"><input class="button" type="submit" value="Заказать поствку на склад"></p>
                    </form>
                    <?php if ($_SESSION['username'] == 'admin' ){?>
                        <form action="add_newproduct.php" method="post" enctype="multipart/form-data">
                            <p class="submit"><input class="button" type="submit" value="Добавить новый товар"></p>
                        </form>
                    <? }?>
    </div>
</div>
</body>
</html>

