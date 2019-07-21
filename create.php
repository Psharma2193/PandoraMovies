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

insertNewUser($_POST, $conn, $dbname);
function insertNewUser($userdata, $conn, $database){
	mysqli_select_db( $conn, $database);
	$sql= "INSERT INTO MovieUser(first_name, last_name, email, home_phone, cell_phone, home_address) values ( '". $conn->real_escape_string($userdata['first_name']). "', '". $conn->real_escape_string($userdata['last_name']). "','". $conn->real_escape_string($userdata['email']) ."',".$conn->real_escape_string($userdata['home_phone']).",".$conn->real_escape_string($userdata['cell_phone']).",'".$conn->real_escape_string($userdata['home_address'])."')";
	if ($conn->query($sql) === TRUE) {
    	echo '<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body  style="background-image: url(\'movies-tiles.jpg\');">
   <div class="container">
      <div class="jumbotron" style="font-size: 40px;background-color: #000000;">
         Pandora Movies Production
      </div>
      <div style="background-color: #E2E6EA"><p>New Record inserted</p></div>
   </div>
</body>
</html>';
	} else {
		echo '<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body  style="background-image: url(\'movies-tiles.jpg\');">
   <div class="container">
      <div class="jumbotron" style="font-size: 40px;background-color: #000000;">
         Pandora Movies Production
      </div>
      <div style="background-color: #E2E6EA"><p>Error Connecting Server. Please try again later.</p></div>
   </div>
</body>
</html>';
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>