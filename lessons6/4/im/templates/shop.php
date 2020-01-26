<h1>
    Каталог товаров
</h1>

<div>
    <?php

    if (mysqli_num_rows($result) > 0) {
        for($i = 1; $i < mysqli_num_rows($result); $i++) {$row = mysqli_fetch_assoc($result);?>
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