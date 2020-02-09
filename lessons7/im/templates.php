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
} elseif ($page == 'authorization') {
    require('templates/authorization.php');

    $dbUsers = 'users';
//Если форма авторизации отправлена...
    if (!empty($_POST['password']) and !empty($_POST['login'])) {
        //Пишем логин и пароль из формы в переменные (для удобства работы):
        $login = $_POST['login'];
        $password = $_POST['password'];

        /*
            Формируем и отсылаем SQL запрос:
            ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
        */
        $query = "SELECT * FROM shop_php.$dbUsers WHERE login='$login' AND password='$password'";
        $result = mysqli_query($connect, $query); //ответ базы запишем в переменную $result.
        $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

        //Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
        if (!empty($user)) {

            //Стартуем сессию:
            session_start();

            //Пишем в сессию информацию о том, что мы авторизовались:
            $_SESSION['auth'] = true;

            //Пишем в сессию логин и id пользователя (их мы берем из переменной $user!):
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            echo 'Привет, ' . $_SESSION['login'];
        } else {
            echo 'Вы указали не правильный логин или пароль!';
        }

    }else {
        echo 'Заполните поля!';}

} elseif ($page == 'comments') {
    require('templates/index_comments.php');
} elseif ($page == 'admin') {
    require('templates/admin.php');
} elseif ($page == 'basket') {$id = $_GET['id'];
    $good = [];
    foreach ($row as $product) {
        if ($product['id'] == $id) {
            $good = $product;
            break;
        }
    }
    require('templates/basket.php');

    $dbBasket = 'basket';
    $name = $row['name'];
    $price = $row['price'];
    $col = htmlspecialchars($_POST['col']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $sql = "SELECT * FROM shop_php.$dbBasket ";
    $addOrder = "INSERT INTO `$dbBasket`(idgoods, name, price, quantity, email, tel) VALUES ('$id','$name','$price','$col','$email','$tel')";
    if(isset($_POST['basket_send']) && !isset($_POST['basket_del'])) {
        $res = mysqli_query($connect, $sql);
        $resadd = mysqli_query($connect, $addOrder);
        echo 'Спасибо за заказ';
    };
    if(isset($_POST['basket_del'])) {
        header("location:index.php?page=shop");
    };

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