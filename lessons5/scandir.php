<?php

$i = 0;
$a = 0;
$c = 1;
$dirSmall = "img_small/";
$dirLarge = "img_large/";

$filesSmall = array_slice(scandir("img_small"), 3);

foreach ($filesSmall as $filesmall) {

    $im = "index.php?id=".$i;

    $imgSmall .= $img = "<a id = \"click\" id = \"$i\" onclick=\"goJs();\"  href=\"page2.php?id=".$i."\" target =\"_blank\" class=\"big-link\" data-reveal-id=\"myModal"."$i\">
			<img alt ='Картинка' src=\"$dirSmall$filesmall\"></a><br>";
    $i++;
    $c++;
}

$files = array_slice(scandir("img_large"), 3);

foreach ($files as $file) {

    $imgLarge .= $img = "<div id=\"myModal" . "$a\" class=\"reveal-modal\">
            <img alt ='Картинка' src=\"$dirLarge$file\"><br>
			<a class=\"close-reveal-modal\">&#215;</a>
		</div>";

    $a++;
}

