
<html>
<head>

    <style>
        .gp-gallery-picture-zoom {
            border: 1px solid #bbb;
            margin: -6px 0 0 -6px;
            position: absolute;
            z-index: 100;
            padding: 5px;
            background: white;
            box-shadow: 0 0 10px #999;
        }
        .gp-gallery-picture-hover {
            box-shadow: 1px 1px 5px #333;
        }

        .pictures {
            margin: 100px auto;
            width: 980px;
        }
        .clear {
            clear: both;
        }
    </style>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="src/jquery-gp-gallery.js"></script>
</head>
<body>

<script>
    $(function() {
        $('.pictures').gpGallery('img');
    })
</script>

<div class="pictures">

    <?php
        $files = scandir("img_large");

        foreach($files as $file){
            if ($file == '.' || $file == '..' || $file == '.DS_Store'){
                continue;
            }

            echo "<img src='img_large/$file'><br>";
        }
    ?>

    <div class="clear"></div>
</div>



</body>
</html>
