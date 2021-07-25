<?php
function paginate($a,$b=1,$c=5){$d=(($b*$c)-$c)+1;$e=$b*$c;
$f=1;$g=array();foreach($a as $h){if($f>=$d&&$f<=$e){$g[]=$h;}$f++;}
$i=ceil(count($a)/$c);return array('page_data'=>$g,'pages'=>$i,'page'=>$b);}
 
$data = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
 
//get page 2 data, 4 items per-page
$page_info = paginate($data,2,4);
print_r($page_info);
?>
