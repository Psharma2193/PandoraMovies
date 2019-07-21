<?php

$file = fopen("login.csv","r");
$credentials = [];
while($data = fgetcsv($file)){
  $credentials[$data[0]] = $data[1];
}
fclose($file);


if($_POST['username'] == $credentials["username"] && $_POST['password'] == $credentials["password"]) {
	echo  '
        <html>
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body  style="background-image: url(\'movies-tiles.jpg\');">
      <div class="container">
         <div class="jumbotron" style="font-size: 40px;background-color: #000000;">
            Pandora Movies Production
         </div>
         <div id="products"  style="background-color: #E2E6EA">
            <ul id="UserList">
               <li style="color: #C82333">
                  Mary Smith
               </li>
               <li style="color: #C82333">
                  John Wang
               </li>
               <li style="color: #C82333">
                  Alex Bington
               </li>
               <li style="color: #C82333">
                  Steve Rogers
               </li>
               <li>
                  <a href="/createUser.php">Create User</a>
               </li>
               <li>
                  <a href="/searchUser.php">Search User</a>
               </li>
               <li>
                  <a href="/localUserDisplay.php">Webiste Users</a>
               </li>
               <li>
                  <a href="remoteUserDisplay.php">Users Of Partner Website</a>
               </li>
               <li>
                  <a href="/allUsers.php">All Users</a>
               </li>
            </ul>
         </div>
      </div>
   </body>
</html>';	
} else {
	echo '<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body  style="background-image: url(\'movies-tiles.jpg\');>
	<div class="container" >
  		<div class="jumbotron" style="font-size: 40px;background-color: #000000;">
  			Pandora Movies Production
  		</div>
  		<div style="background-color: #E2E6EA">
  			<b style="color: #C82333;font-size: 25px;">
  				INVALID CREDENTIALS. PLEASE TRY AGAIN
  			</b>
  		</div>
  	</div>
</body>
</html>';
}

