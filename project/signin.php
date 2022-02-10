<?php
session_start();
require_once 'connection.php';

$name = $_POST['name'];
$password = $_POST['password'];
$checking = mysqli_query($connection, "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
if (mysqli_num_rows($checking) == 0)
    {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: index.php');
    }
else
    {
        header('Location: signsuccess.php');
    }
?>
