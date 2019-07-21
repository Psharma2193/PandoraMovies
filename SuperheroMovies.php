<?php 
setcookie('SuperheroMovies',isset($_COOKIE['SuperheroMovies'])?++$_COOKIE['SuperheroMovies']:1);
setcookie('SuperheroMoviesTime',time());
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
  		<div class="jumbotron" style="font-size: 40px;background-color: #000000;">
  			Superhero Movies
  		</div>
  	</div>
</body>
</html>