<html>

	<head>
        <meta charset="utf-8" />
        <title></title>

        <!-- Attach our CSS -->
        <link rel="stylesheet" href="reveal.css">

        <!-- Attach necessary scripts -->
        <!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
        <script type="text/javascript" src="jquery.reveal.js"></script>

        <style type="text/css">
            body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
            .big-link { display:block; margin: 100px; text-align: center; font-size: 70px; color: #0066ff; float: left; }
        </style>
		
	</head>
	<body>
    <?php include_once 'scandir.php';

    ?>

    <script>

        function goJs() {
            var val = "<?php echo $im; ?>";

            window.location.href = "" + val;

        };

    </script>


 <?php

     include 'config.php';

 echo $imgSmall;
 echo $imgLarge;


 $sql = "SELECT * FROM shop_php.img";

 $res = mysqli_query($connect,$sql);


 $id = $_GET['id']+1;
 if (isset($_GET['id'])) {
    $sql = "SELECT * FROM shop_php.img";
    $update = "UPDATE `img` SET `click` = `click` + 1 WHERE `id` = '$id'";
    $res = mysqli_query($connect, $sql);
    $click = mysqli_query($connect, $update);
    $resultt = "SELECT click FROM shop_php.img WHERE `id` = '$id'";
    $clickResult = mysqli_query($connect, $resultt);
    $row=mysqli_fetch_array($clickResult);
    $mk=$row['click'];
    echo  "Количество кликов по картинке:".$row['click'];
};




 ?>

	</body>
    </html>


