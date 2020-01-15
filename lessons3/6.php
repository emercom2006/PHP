
<?php




$menu = ["Home", "Shop", "Blog", "Portfolio", "Contact"];
$submenu = ["Category", "Author", "Archive", "Tags"];
for ($i = 0; $i<count($menu); $i++){

    if ($i == 3){
        for ($i= 0; $i<count($submenu); $i++){
        $ul = "<li><a href = #>" . $submenu[$i] ."</a></li>";
        $s .= '<ul>' . $ul . "</ul>";}
    }

    $ul = "<li><a href = #>" . $menu[$i] ."</a></li>";
    $s .= $ul;
}
echo '<ul>' . $s . "</ul>";

