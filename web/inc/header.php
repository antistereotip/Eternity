<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo $this->charset; ?>">
<meta name="keywords" content="<?php echo $this->keywords; ?>">
<meta name="description" content="<?php echo $this->description; ?>">
<meta name="author" content="<?php echo $this->author; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $this->title; ?></title>
<style>
section {width: 58%; padding:1%; float: left;}
aside {width: 38%; padding: 1%; float: left;}
nav li {
  display: inline;
}
footer {width: 98%; padding: 1%; float: left;}
</style>

</head>
<body>
<h1>Universe</h1>
<?php
$dir = "./pic/";
#---ucitavanje vrednosti iz foldera u niz---#
$pictures = glob($dir."*.png");
//var_dump($pictures);
shuffle($pictures);

#---prikazivanje 4 random slike iz niza $pictures---#
for ($i = 0; $i < 4; $i++) {
    echo "<img src='". $pictures[$i] ."' height='150'/>";
}
?>
<p></p>

