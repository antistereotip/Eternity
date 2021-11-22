<?php
$dir = "./data/pic/";
//ucitavanje vrednosti iz foldera u niz
$pictures = glob($dir."*.png");
//var_dump($pictures);
shuffle($pictures);

//prikazivanje 4 random slike iz niza $pictures
for ($i = 0; $i < 4; $i++) {
    echo "<img src='". $pictures[$i] ."' height='150'/>";
}
?>