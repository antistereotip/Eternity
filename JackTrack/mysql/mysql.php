<html>
<head>
<title>Store JSON Data</title>
</head>
<body>
<?php 

// TESTING TESTING TESTING TESTING
// SIMPLE STORE ONE JSON FILE INTO DATABASE


$data = file_get_contents('node_mysql.json'); 
//Convert JSON string into PHP array format
$array = json_decode($data, true);
print_r ($array);

$id = $array['id'];
$jfrom = $array['jfrom'];
$jto = $array['jto'];
$jthrough = $array['jthrough'];
$jamount = $array['jamount'];

print_r ($id);
print_r ($jfrom);
print_r ($jto);
print_r ($jthrough);
print_r ($jamount);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jacktrack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO jsondata (id, jfrom, jto, jthrough, jamount)
VALUES ('$id', '$jfrom', '$jto', '$jthrough', '$jamount')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>