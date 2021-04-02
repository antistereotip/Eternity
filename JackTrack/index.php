<?php
//date in microseconds
$date = round(microtime(true) * 1000);

//true of nodes
$true_of_node = 1;

//array data
$arr = array ('id'=>1,'jfrom'=>'hightech','jto'=>'John Wick','jthrough'=>'network','jamount'=>5, 'time'=> $date, 'true of nodes' => $true_of_node);

//output json encoded
echo json_encode($arr);

$file = json_encode($arr);

//print value of array
$result = print_r($file, true);



//all data in array
$data = array($result);

//put all variables in all nodes/nodes[n].json data
//file_put_contents('nodes/node0.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX); - testing json file node0.json
file_put_contents('nodes/node1.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('nodes/node2.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('nodes/node3.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('nodes/node4.json', implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
?>