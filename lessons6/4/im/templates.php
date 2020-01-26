<?php
$date = date(Y);
$db = 'goods';
$sql = "SELECT * FROM shop_php.$db";

$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$page = $_GET['page'];

if (!isset($page)) {
    require('templates/main.php');
} elseif ($page == 'shop') {
    require('templates/shop.php');
} elseif ($page == 'comments') {
    require('templates/index_comments.php');
} elseif ($page == 'admin') {
    require('templates/admin.php');
} elseif ($page == 'product') {
    $id = $_GET['id'];
    $good = [];
    foreach ($row as $product) {
        if ($product['id'] == $id) {
            $good = $product;
            break;
        }
    }
    require('templates/openedProduct.php');
}

?>