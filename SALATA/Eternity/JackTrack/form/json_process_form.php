<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		//function to retreive data from json file
	function get_data() {
		$from = $_POST['from'];
		$file_name='node_json_test'. '.json';

		if(file_exists("$file_name")) {
			$current_data=file_get_contents("$file_name");
			$array_data=json_decode($current_data, true);
							
			$extra=array(
				'from' => $_POST['from'],
				'to' => $_POST['to'],
				'through' => $_POST['through'],
				'amount' => $_POST['amount'],
			);
			$array_data[]=$extra;
			echo "File exist<br/>";
			return json_encode($array_data);
		}
		else {
			$datae=array();
			$datae[]=array(
				'from' => $_POST['from'],
				'to' => $_POST['to'],
				'through' => $_POST['through'],
				'amount' => $_POST['amount'],
			);
			echo "File not exist<br/>";
			return json_encode($datae);
		}
	}

	$file_name='node_json_test'. '.json';
	
	//file put contents into file_name and call get_data function
	if(file_put_contents("$file_name", get_data())) {
		echo 'Success';
	}				
	else {
		echo 'There is some error';				
	}
}
	
?>
