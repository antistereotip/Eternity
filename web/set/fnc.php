
<?php

defined('ROOT_DIR') or exit('No direct script access allowed');
 
//ng1np class for page rendering and templating
class ng1np {

	public function render($script) {
		//func cmprss inside render function
		//function compress($bffr) {
  		//	$srch = array('/\>[^\S ]+/s', '/[^\S ]+\</s',  '/(\s)+/s');
  		//	$chng = array('>', '<', '\\1');
  		//	return preg_replace($srch, $chng, $bffr);
		//}
		//ob_start();$this->_require($script);return ob_get_clean();
		//if (@ini_set('zlib.output_compression',TRUE) || @ini_set('zlib.output_compression_level',2)) 
		//	{ob_start('compress');} else { ob_start('ob_gzhandler');}
        	$this->_require($script);
		//if(extension_loaded('zlib')) { ob_end_flush(); }
    	}
    	public function __get($key) {
		//engine: 1var <-> 1tpl 
    		return(isset($this->$key)?$this->$key:null);
    	}
    	protected function _require() {
		//inc_fnc: including script
        	require_once func_get_arg(0);
    	}
}


?>
