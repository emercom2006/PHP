<?php
$sql = "SELECT * FROM shop_php.commets";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $sqlres = mysqli_query($connect, $sql);
        $id = $row["id"];
        $fio = $row["fio"];
        $commets = $row["new_commets"];
        $date = $row["date"];

        echo "<div class='comments'><p>Отзыв #".$id." от: " . $fio . ", оставлен: " . $date . "<br>Текст отзыва: " . $commets."<br></p></div>";

    }
}
mysqli_close($connection);
?>
