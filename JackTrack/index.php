<?php
//array data
$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);

//output json encoded
echo json_encode($arr);

$file = json_encode($arr);

//date in microseconds
$date = round(microtime(true) * 1000);

//print value of array
$result = print_r($file, true);

//true of nodes
$true_of_node = 1;

//all data in array
$data = array($result, $date, $true_of_node);

//put all variables in all nodes.json data
file_put_contents('node0.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('node1.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('node2.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('node3.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('node4.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
?>
