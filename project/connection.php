<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'infobase');

if($connection == false)
{
    echo 'Нет подключения к базе данных!<br>';
    exit();
}
?>