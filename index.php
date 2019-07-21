<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		function showDetails(element) {
			document.getElementById('home').style.display = 'none';
			document.getElementById('aboutUs').style.display = 'none';
			document.getElementById('news').style.display = 'none';
			document.getElementById('products').style.display = 'none';
			document.getElementById('contacts').style.display = 'none';
      document.getElementById('users').style.display = 'none';
      document.getElementById('websiteStats').style.display = 'none';

			document.getElementById(element).style.display = 'block';
		}
    function showUserData(){
      document.getElementById('username').value="";
      document.getElementById('password').value="";
      document.getElementById('users').style.display = 'block';
      document.getElementById('validateAdmin').style.display = 'none';
      document.getElementById('UserList').style.display = 'block';

    }
    function comparePassword() {
      console.log({username: document.getElementById('username').value, password: document.getElementById('password').value});
      $.ajax({
          type: "POST",
          url: "login.php",
          data: {username: document.getElementById('username').value, password: document.getElementById('password').value},
          dataType:'JSON', 
          success: function(response){
              console.log(response);
              if(response.success) {
                 showUserData();
              }
          }
      });
    }

		function initData() {
			document.getElementById('home').style.display = 'none';
      document.getElementById('aboutUs').style.display = 'none';
      document.getElementById('news').style.display = 'none';
      document.getElementById('products').style.display = 'none';
      document.getElementById('contacts').style.display = 'none';
      document.getElementById('users').style.display = 'none';
      //document.getElementById('UserList').style.display = 'none';
      document.getElementById('websiteStats').style.display = 'none';
		}
	</script>
</head>
<body onload="initData()" style="background-image: url('movies-tiles.jpg');>
	<div class="container" ">
  		<div class="jumbotron" style="font-size: 40px;background-color: #000000;">
  			Pandora Movies Production
  			<table class="table">
			<tr>
				<td style="color: #000000;font-weight: bold;"><button class="btn btn-link" onclick="showDetails('home')"> HOME </button> </td>
				<td style="color: #000000;font-weight: bold;"><button class="btn btn-link" onclick="showDetails('aboutUs')">About Us</button></td>
				<td style="color: #000000;font-weight: bold;"><button class="btn btn-link" onclick="showDetails('products')">Products/Services</button></td>
				<td style="color: #000000;font-weight: bold;"><button class="btn btn-link" onclick="showDetails('news')">News</button></td>
				<td style="color: #000000;font-weight: bold;"><button class="btn btn-link" onclick="showDetails('contacts')">Contacts</button></td>
        <td style="color: #000000;font-weight: bold;">
          <?php 
            $file = fopen("login.csv","r");
            $credentials = [];
            while($loginData = fgetcsv($file)){
              $credentials[$loginData[0]] = $loginData[1];
            }
            fclose($file);
          ?>
          <button class="btn btn-link" onclick="showDetails('users')">Users</button>
        </td>
        <td style="color: #000000;font-weight: bold;"><button class="btn btn-link" onclick="showDetails('websiteStats')">Website Stats</button></td>
			</tr>
		</table>
  		</div>
  		<div id="home"  style="background-color: #E2E6EA">
  			<b style="color: #C82333;font-size: 25px;">
  				WELCOME TO PANDORA VIDEO PRODUCTION HOUSE. WE PROVIDE GAMING ANF VIDEO SERVICES.
  			</b>
  		</div>
		<div id="aboutUs"  style="background-color: #E2E6EA">
  			<p style="color: #C82333">
  				Pandora Video Production, is an American-based provider of home movie and video game rental services through video rental shops, DVD-by-mail, streaming, video on demand, and cinema theater. Pandora Video Production became internationally known throughout the 1990s. At its peak in 2004, Blockbuster employed 84,300 people worldwide, including about 58,500 in the United States and about 25,800 in other countries, and had 9,094 stores in total, with more than 4,500 of these in the US.<br/><br/>While the Blockbuster brand has mostly been retired, Dish maintained a small number of Blockbuster franchise agreements, which allowed some stores to remain open. Eventually just two stores were open by 2019: one U.S. store in Bend, Oregon,[15] and another store in Morley, Western Australia, which is set to close at the end of March.[16] In the Nordic countries, the brand rights are now held by TDC A/S, and Blockbuster continues as a video on demand service.
  			</p>
  		</div>
  		<div id="news"  style="background-color: #E2E6EA">
  			<ul>
  				<li style="color: #C82333">
  					Pandora Video Production wins the award for best production house at Oscars,2019.
  				</li>
  				<li style="color: #C82333">
  					Pandora Video Production wins the award for best production house at Golden Globe, 2019.
  				</li>
  				<li style="color: #C82333">
  					Pandora Video Production wins the award for best production house at MTV Awards, 2018.
  				</li>
  			</ul>
  		</div>
  		<div id="products"  style="background-color: #E2E6EA">
  			<ul>
  				<li style="color: #C82333">
  					<a href="/ComedyMovies.php">Comedy Movies</a>
  				</li>
  				<li style="color: #C82333">
  					<a href="/ThrillerMovies.php">Thriller Movies</a>
  				</li>
  				<li style="color: #C82333">
  					<a href="/ScifiMovies.php">Sci-Fi Movies</a>
  				</li>
  				<li style="color: #C82333">
  					<a href="/Documentaries.php">Documentaries</a>
  				</li>
          <li style="color: #C82333">
            <a href="/SuperheroMovies.php">Superhero Movies</a>
          </li>
          <li style="color: #C82333">
            <a href="/EducationalMovies.php">Educational Movies</a>
          </li>
          <li style="color: #C82333">
            <a href="/threeDMovies.php">3D Movies</a>
          </li>
          <li style="color: #C82333">
            <a href="/HistroicalMovies.php">Histroical Movies</a>
          </li>
          <li style="color: #C82333">
            <a href="/VirtualRealityMovies.php">Virtual Reality Movies</a>
          </li>
          <li style="color: #C82333">
            <a href="/ShortMovies.php">Short Movies</a>
          </li>
  			</ul>
  		</div>
  		<div id="contacts" style="background-color: #E2E6EA">
  			<?php 
  				$file = fopen("contacts.csv","r");
				$data = fgetcsv($file);
				fclose($file);
  			 ?>
  			<table>
  				<tr>
  					<td style="color: #C82333">
  						Name : <?php echo $data[0] ?>
  					</td>
  				</tr>
  				<tr>
  					<td style="color: #C82333">
  						Email : <?php echo $data[1] ?>
  					</td>
  				</tr>
  				<tr>
  					<td style="color: #C82333">
  						Phone : <?php echo $data[2] ?>
  					</td>
  				</tr>
  			</table>
  		</div>
      <div id="users"  style="background-color: #E2E6EA">
        <div id = "validateAdmin">
        <form  action="user.php" method="POST"> 
          <table>
            <tr>
              <td>
                <input type="text" name="username" id="username" placeholder="Enter the username">
              </td>
            </tr>
            <tr>
              <td>
                <input type="password" name="password" id="password" placeholder="Enter the password">
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-secondary btn-lg">Login</button>
              </td>
            </tr>
          </table>
        </form>
      </div>
	</div>
  <div id="websiteStats"  style="background-color: #E2E6EA">
        <?php
          $cookieData = $_COOKIE;
          $lastFiveVisitedProductsString = 'None of the Products page have been visited.';
          $mostFrequentlyVisitedWebsiteString = 'None of the Products page have been visited.';

$movieCount = array("ComedyMovies"=>"Comedy Movies page", 
  "ThrillerMovies"=>"Thriller Movies Page", 
  "ScifiMovies"=>"ScifiMovies Movies page", 
  "Documentaries"=>"Documentaries page", 
  "SuperheroMovies"=>"Superhero Movies page", 
  "EducationalMovies"=>"Educational Movies page", 
  "threeDMovies"=>"3D Movies page", 
  "HistroicalMovies"=>"Histroical Movies page", 
  "VirtualRealityMovies"=>"Virtual Reality Movies page",
  "ShortMovies"=>"Short Movies page"
);

$movieTime = array("ComedyMoviesTime" => "Comedy Movies Page", 
  "ThrillerMoviesTime"=>"Thriller Movies Page", 
  "ScifiMoviesTime"=>"ScifiMovies Movies page", 
  "DocumentariesTime"=>"Documentaries page", 
  "SuperheroMoviesTime"=>"Superhero Movies page", 
  "EducationalMoviesTime"=>"Educational Movies page", 
  "threeDMoviesTime"=>"3D Movies page", 
  "HistroicalMoviesTime"=>"Histroical Movies page", 
  "VirtualRealityMoviesTime"=>"Virtual Reality Movies page", 
  "ShortMoviesMoviesTime"=>"Short Movies page"
);
if(count($cookieData)>0) {
  $movieCountData = array();
  $movieTimeData = array();
  foreach ($movieTime as $key => $value) {
    # code...
    if(isset($cookieData[$key]))
      $movieTimeData[$key] = $cookieData[$key];
  }
  $lastFiveVisitedProducts = array();
  $lastFiveVisitedProductsString = '';
  $count = 5;
  if(count($movieTimeData) > 0){
    arsort($movieTimeData);
    $lastFiveVisitedProductsString = $lastFiveVisitedProductsString . '<ul>';
    foreach ($movieTimeData as $key => $value) {
      --$count;
      if($count >= 0){
        $lastFiveVisitedProducts[] = $movieTime[$key];
        $lastFiveVisitedProductsString = $lastFiveVisitedProductsString . '<li>' . $movieTime[$key] . '</li>';
      }
    }
    $lastFiveVisitedProductsString = $lastFiveVisitedProductsString . '</ul>';
  }
  

  foreach ($movieCount as $key => $value) {
    if(isset($cookieData[$key]))
      $movieCountData[$key] = $cookieData[$key];
  }
  $count = 5;
  $mostFrequentlyVisitedWebsiteString = '';
  $mostFrequentlyVisitedWebsite = array();
  if(count($movieCountData) > 0){
    arsort($movieCountData);
    $mostFrequentlyVisitedWebsiteString = $mostFrequentlyVisitedWebsiteString . '<ul>';
    foreach ($movieCountData as $key => $value) {
       --$count;
      if($count >= 0){
        $mostFrequentlyVisitedWebsite[] = $movieCount[$key];
        $mostFrequentlyVisitedWebsiteString = $mostFrequentlyVisitedWebsiteString . '<li>' . $movieCount[$key] .'</li>';
      }
    }
    $mostFrequentlyVisitedWebsiteString = $mostFrequentlyVisitedWebsiteString . '</ul>';  
  }
}

        ?>
        <h3>Five Most Frequently Visited Products products</h3>
        <?php echo $mostFrequentlyVisitedWebsiteString; ?>

        <h3>Last five previously visited products</h3>
        <?php echo $lastFiveVisitedProductsString; ?>
  </div>
</body>
</html>