<?php
$db = 'goods';
$sql = "SELECT * FROM shop_php.$db WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div id="openedProduct-content">
    <h1 id="openedProduct-name">Корзина с товарами</h1>
    <div id="openedProduct-desc">Вы заказали:<br>
        <form method='POST'>
        <?php echo $row['name']; ?><br>
        <img width="100px;" src="/php1/lessons6/4/im<?php echo $row['img']; ?>"/>

    </div>
    <div id="openedProduct-price">
        Цена: <?php echo $row['price']; ?>
    </div>

    <div id="openedProduct-price">
         Количество товаров: <input type="number" name="col" value="1" min="0" max="10"/>
    </div>
    <div id="openedProduct-price">
        Укажите почту: <input type="email" name="email" size = "11"/>
    </div>
    <div id="openedProduct-price">
        Укажите телефон: <input type="tel" name="tel" size = "11"/>
    </div>
        <input class="shopUnitMore" type="submit" name="basket_send" value="Оформить заказ">
    <input class="shopUnitMore" type="submit" name="basket_del" value="Отменить заказ">
    </form>
</div>