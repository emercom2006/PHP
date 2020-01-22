<?php
const SERVER = "localhost";
const DB = "shop_php";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or
die("Ошибка соединения с базой данных");