<?php
$db = 'goods';
$sql = "SELECT * FROM shop_php.$db WHERE id = $id";

$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div id="openedProduct-img">
    <img src="/php1/lessons6/4/im<?php echo $row['img']; ?>">
</div>
<div id="openedProduct-content">
    <h1 id="openedProduct-name">
        <?php echo $row['name']; ?>
    </h1>
    <div id="openedProduct-desc">
        <?php echo $row['desc']; ?>
    </div>
    <div id="openedProduct-price">
        Цена: <?php echo $row['price']; ?>
    </div>
    <div id="openedProduct-price">
        Цена: <?php echo $row['price']; ?>
    </div>
    <a href="index.php?page=basket&id=<?php echo $row['id']; ?>" class="shopUnitMore">
        Купить
    </a>

</div>
