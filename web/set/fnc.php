
<?php
#---nema direktnog pristupanja ovoj klasi---#
defined('ROOT_DIR') or exit('No direct script access allowed');
 
#----klasa za renderovanje i templejte-----#
class ng1np {
	#---metod renderovanje---#
	public function render($script) {
        	$this->_require($script);
    	}

	#---zasticena funkcija _require---#
    	protected function _require() {
        	require_once func_get_arg(0);
    	}
}


?>
