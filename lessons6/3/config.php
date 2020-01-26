<?php
const SERVER = "localhost";
const DB = "shop_php";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB);
if (!$connect) {
    echo "Ошибка: Невозможно установить соединение с MySQL<br>";
    echo "<br>Код ошибки errno: " . mysqli_connect_errno();
    echo "<br>Текст ошибки error: " . mysqli_connect_error();
    exit;
}