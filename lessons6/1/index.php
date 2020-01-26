<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'calc_1.php';
?>

<form method="GET" class="CALC">
    <div>
    <h3>Калькулятор</h3>
    Введите значение а: <input type="number" name="a" /><br><br>
    Введите значение b: <input type="number" name="b" /><br><br>
    Что будем делать с a и b:
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>
    <input type="submit" value="Посчитать"><br>
    <?php
    echo $error;
    if ($b == "0") {
        echo 'Делить на 0 нельзя!';}
    else {
    echo " Результат: $a $operation $b = $d";} ?>
    </div>
</form>
