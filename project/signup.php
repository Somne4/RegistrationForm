<?php
session_start();
require_once 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$emailfromdb = mysqli_query($connection, "SELECT `email` FROM `users` WHERE `email` = '$email'");
$emailcheck = mysqli_fetch_assoc($emailfromdb);

if ($password != $password_confirm)
    {
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: reg.php');
    }
elseif ($emailcheck)
    {
            $_SESSION['message'] = 'Пользователь с таким адресом почты уже существует';
            header('Location: reg.php');
    }
else
    {
        mysqli_query($connection, "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: index.php');
    }
?>
