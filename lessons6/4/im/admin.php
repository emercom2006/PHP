<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

</head>
<body>
<?php
include 'config.php';
include 'CRUD.php';
?>

<h3>Удалить товар</h3>
<form name="del" class="admin">
    <div>
    Введите id товара: <input type="number" name="iddel" /><br><br>
    <input type="submit" value="Удалить"><br>
    </div>
</form>
<hr>
<h3>Добавить товар</h3>
<form name="add" class="admin">
    <div>
    Имя товара: <input type="text" name="name" /><br><br>
    Описание товара: <br><textarea type="text" rows="10" cols="45"  name="desc" ></textarea><br><br>
    Цена товара: <input type="text" name="price" /><br><br>
    Адрес картинки товара товара: <input type="text" name="img" /><br><br>
    <input type="submit" name="idadd" value="Добавить"><br>
    </div>
</form>
<hr>
    <h3>Обновить информацию у товара</h3>
    <form name="upd" class="admin"><div>
        id товара: <input type="number" name="idupd" /><br><br>
        Имя товара: <input type="text" name="name" /><br><br>
        Описание товара: <br><textarea type="text" rows="10" cols="45"  name="desc" ></textarea><br><br>
        Цена товара: <input type="text" name="price" /><br><br>
        Адрес картинки товара товара: <input type="text" name="img" /><br><br>
        <input type="submit" value="Обновить"><br></div>
    </form>

<hr>

<h3>Список товаров</h3>
<div>

<?php

$db = 'goods';
$sql = "SELECT * FROM shop_php.$db";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        for($i = 0; $i < mysqli_num_rows($result); $i++) {$row = mysqli_fetch_assoc($result);?>
<div class="shopUnit">
    <div>ID товара  <?php echo $row['id']; ?></div>
    <div>Путь до картинки товара  <?php echo $row['img']; ?></div>
    <div class="shopUnitName">Имя товара: <?php echo $row['name']; ?></div>
    <div class="shopUnitShortDesc">Описание товара: <?php echo $row['desc']; ?></div>
    <div class="shopUnitPrice">Цена товара: <?php echo $row['price']; ?> <hr></div>

</div><?php }}?>
</div>
</body>
</html>