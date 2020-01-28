<?php

$id = $_GET['iddel'];
if(isset($_GET['iddel'])) {
    $db = "goods";
    $sql = "SELECT * FROM shop_php.$db";
    $res = mysqli_query($connect, $sql);
    $sqldel = "DELETE FROM `$db` WHERE id = $id";
    $resdel = mysqli_query($connect, $sqldel);
    echo 'Удалили';
};

$name = $_GET['name'];
$desc = $_GET['desc'];
$price = $_GET['price'];
$img = $_GET['img'];
if(isset($_GET['idadd'])) {
    $db = "goods";
    $sql = "SELECT * FROM shop_php.$db";
    $res = mysqli_query($connect, $sql);
    $sqladd = "INSERT INTO `$db`(name, `desc`, price, img) VALUES ('$name','$desc','$price','$img')";
    $resadd = mysqli_query($connect, $sqladd);
    echo 'Добавили';
};

$id = $_GET['idupd'];
$name = $_GET['name'];
$desc = $_GET['desc'];
$price = $_GET['price'];
$img = $_GET['img'];

if(isset($_GET['idupd'])) {
    $db = "goods";
    $sql = "SELECT * FROM shop_php.$db";
    $res = mysqli_query($connect, $sql);
    $sqladd = "UPDATE `$db` SET `name`='$name',`desc`='$desc',`img`='$img',`price`='$price' WHERE id = '$id'";
    $resadd = mysqli_query($connect, $sqladd);
    echo 'Обновили';
};