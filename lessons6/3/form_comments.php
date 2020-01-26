<?php
$title = 'Отзывы';
$db = "commets";
$date = date("d.m.Y");
$sql = "SELECT * FROM shop_php.$db";
$new_com = $_POST['new_comm'];
$fio = $_POST['fio'];

if (isset($_POST['new_comm']) && isset($_POST['fio'])) {
    $insert = "INSERT INTO `$db`(fio, new_commets, date) VALUES ('$fio','$new_com','$date')";
    $res = mysqli_query($connect, $sql);
    $click = mysqli_query($connect, $insert);
}
mysqli_close($connection);

?>