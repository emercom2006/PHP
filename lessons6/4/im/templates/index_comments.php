<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
    <link rel="stylesheet" type="text/css" href="style_comments.css">
</head>
    <body>

    <?php
        include 'config.php';
        include 'form_comments.php';
    ?>
            <form method="POST" class="comments">
                <div>
                <h3>Оставить отзыв</h3>
                Ваше имя: <input type="text" name="fio" /><br><br>
                Напишите текст отзыва:<br>
                    <textarea type="text" rows="10" cols="45" name="new_comm"></textarea>
                    <br><br>
                <input type="submit" value="Отправить"><br>
                </div>
            </form>

        <?php include 'comment.php';?>
    </body>
</head>

