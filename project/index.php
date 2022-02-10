<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!-- Авторизация -->
    <form action="signin.php" method="post">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите имя"><br>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"><br>
        <button type="submit">Войти</button>
        <p>
            <a href="reg.php">Создать аккаунт</a>
        </p>
        <?php
            if ($_SESSION['message'])
            {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
