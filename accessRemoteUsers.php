<?php

$servername = "localhost";
$username = 'root';
$password = 'admin';
$dbname = "suyashsj_pandoraMovies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$data = searchUser($conn, $dbname);
function searchUser($conn, $database){
	mysqli_select_db( $conn, $database);
	$sql = "SELECT first_name, last_name, email, home_phone, cell_phone, home_address FROM MovieUser";
	$result = $conn->query($sql);
	$data = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
	} else {
		$data["error"] = "Error connecting to remote server. Please try again later.";
	}
	return $data;
}
header('Content-type: application/json');
echo json_encode( $data );	