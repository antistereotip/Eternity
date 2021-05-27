<?php
// Read JSON file
$readjson = file_get_contents('data.json') ;

//Decode JSON
$data = json_decode($readjson, true);

//Print data
print_r($data);
echo "<br/><br/> Names are: <br/>";

//Parse the employee name
foreach ($data as $emp) {
  echo $emp['Name']."<br/>";
}
?>