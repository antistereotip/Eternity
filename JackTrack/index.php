<?php
//array data
$arr = array ('from'=>'hightech','to'=>'John Wick','through'=>'network','amount'=>5);


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

//put all variables in all nodes/nodes[n].json data
file_put_contents('nodes/node0.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('nodes/node1.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('nodes/node2.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('nodes/node3.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('nodes/node4.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
?>