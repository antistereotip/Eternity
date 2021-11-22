<?php 
if(extension_loaded('zlib')) {ob_start('ob_gzhandler');} 
header("Content-type: text/html"); 
require_once "include/zaglavlje.php";
?>

<!-- ---------------------------------------------------------------------------------------------------------------------  -->
<!-- grid -->
<article class="grid">
	
<!-- trecina -->
<div class="cetiri kol">
<nav>
	<ul>
	<li><a href="?q=home">Home</a></li>
	<li><a href="?q=antistereotip">Antistereotip</a></li>
	<li><a href="?q=kontakt">Kontakt</a></li>
	</ul>
</nav>
</div>
<!-- trecina kraj -->

<!-- dve trecine -->
<div class="dvanest kol" id="ex8">
<?php
$str = isset($_GET['q']) ? $_GET['q'] : '';

switch ($str) {
	case 'antistereotip': 
	case 'kontakt':
		include 'lib/'.$str.'.php';
	break;
	default:
		include 'lib/home.php';
}

?>
</div>
<!-- dve trecine kraj -->


</article>
<!-- kraj grid-a -->
<!-- ---------------------------------------------------------------------------------------------------------------------  -->

<?php 
require_once "include/fusnota.php";
if(extension_loaded('zlib')){ob_end_flush();}
?>
