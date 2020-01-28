<?php
$title = 'Отзывы';
$db = "commets";
$date = date("d.m.Y");
$sql = "SELECT * FROM shop_php.$db";
$new_com = $_POST['new_comm'];
$fio = $_POST['fio'];

if (isset($_POST['send']) && isset($_POST['fio']) && isset($_POST['new_comm'])) {
    $insert = "INSERT INTO `$db`(fio, new_commets, date) VALUES ('$fio','$new_com','$date')";
    $click = mysqli_query($connect, $insert);
    header("Location: index.php?page=comments");
}
mysqli_close($connection);

?>