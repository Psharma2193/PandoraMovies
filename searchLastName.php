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
searchUser($_POST, $conn, $dbname);

function searchUser($userData, $conn, $database){
	mysqli_select_db( $conn, $database);
	$sql = "SELECT first_name, last_name, email, home_phone, cell_phone, home_address FROM MovieUser WHERE last_name LIKE '%" . $conn->real_escape_string($userData['last_name']). "%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// output data of each row
      $htmlData = '<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body  style="background-image: url(\'movies-tiles.jpg\');">
   <div class="container">
      <div class="jumbotron" style="font-size: 40px;background-color: #000000;">
         Pandora Movies Production
      </div>
      <div style="background-color: #E2E6EA"><table border="1">';
      while($row = $result->fetch_assoc()) {
      $htmlData = $htmlData . '<tr>
                  <td>
                    '. $row["first_name"] .'
                  </td>
                  <td>
                    '. $row["last_name"] .'
                  </td>
              </tr>
            ';
      }
      $htmlData = $htmlData.'</table></div>
   </div>
</body>
</html>';
    echo $htmlData;
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
      <div style="background-color: #E2E6EA"><p>No results found</p></div>
   </div>
</body>
</html>';
	}
}

$conn->close();