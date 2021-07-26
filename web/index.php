<?php
#--------http://cya.soon.it------------------------------#
#--------hightech - It's not a bug, it's a feature-------#

#--------definisi root putanju--------#
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
require 'set/class.php';

#--------ruter-----------#
$route = isset($_GET['route']) ? $_GET['route'] : '';
//$route = $_GET['route'];

#--------dozvoljene_stranice-----------#
$pages = array (
'default' => './lib/default.php',
'api' => './lib/api.php',
'wapi' => './lib/wapi.php'
);

#------proverava da li je string u nizu veci od nule i da li je u nizu------#
if( (strlen($pages[$route]) > 0) && (in_array($pages[$route], $pages)) ){

	#-------pozovi stranicu po ruti--------#
	require $pages[$route];

#-----u suprotnom poziva default stranicu-----#
} else { require_once(ROOT_DIR .'lib/default.php'); }
?>
