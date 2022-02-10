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
<!-- Регистрация -->
    <form action="signup.php" method="post"
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите имя"><br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Введите адрес почты"><br>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"><br>
        <label>Повторите пароль</label>
        <input type="password" name="password_confirm" placeholder="Повтор пароля"><br>
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? <a href="index.php">Авторизоваться</a>
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
