<h1>
    Каталог товаров
</h1>

<div>
    <?php
    $db = 'goods';
    $sql = "SELECT * FROM shop_php.$db";
    $result = mysqli_query($connect, $sql);
    $n = mysqli_num_rows($result);
    $row = [];
    if ($n > 0) {
        for($i = 0; $i < $n; $i++) {$row = mysqli_fetch_assoc($result);?>
        <div class="shopUnit">
            <img src="/php1/lessons6/4/im<?php echo $row['img']; ?>"/>

            <div class="shopUnitName">
                <?php echo $row['name']; ?>
            </div>
            <div class="shopUnitShortDesc">
                <?php echo $row['desc']; ?>
            </div>
            <div class="shopUnitPrice">
                Цена: <?php echo $row['price']; ?>
            </div>
            <a href="index.php?page=product&id=<?php echo $row['id']; ?>" class="shopUnitMore">
                Подробнее
            </a>
        </div><?php }}?>
</div>