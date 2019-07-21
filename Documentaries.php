<?php 
setcookie('Documentaries',isset($_COOKIE['Documentaries'])?++$_COOKIE['Documentaries']:1);
setcookie('DocumentariesTime',time());
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
  		<div class="jumbotron" style="font-size: 40px;background-color: #000000;">
  			Documentaries
  		</div>
  	</div>
</body>
</html>