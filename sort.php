<?php
$cookieData = json_decode('{
  "ComedyMovies": "5",
  "ComedyMoviesTime": "1555763795",
  "ThrillerMovies": "1",
  "EducationalMovies": "9",
  "EducationalMoviesTime": "1555763807",
  "threeDMovies": "3",
  "threeDMoviesTime": "1555763808",
  "HistroicalMovies": "4",
  "HistroicalMoviesTime": "1555763808",
  "VirtualRealityMovies": "1",
  "VirtualRealityMoviesTime": "1555763809",
  "ShortMovies": "1",
  "ShortMoviesMoviesTime": "1555763810"
}', true);

//$cookieData = json_decode('{}', true);


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
    print_r($lastFiveVisitedProductsString);
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
    print_r($mostFrequentlyVisitedWebsiteString);  
  }
} else {
  echo 'No data';
}