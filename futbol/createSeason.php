<?php 


$numTeams = $_COOKIE['numTeams'];


$teams = array();



for ($i = 1; $i <= $numTeams ; $i++) { 
	$teams[$i] = $_POST['team'.$i];
}

if($numTeams%2 == 1){ 
				// al ser equipos impares,sumo un equipo mas,que será el ficiticio(DESCANSA)
				$teams[] = "DESCANSA";
			}

// $teams = array("Real Madrid","Real Valladolid","Atletico de Madrid","Sevilla","Deportivo de la coruña","Barcelona","Valencia","Betis");

var_dump($teams);

echo "<br>";
$aux = "";
$dayTrip = 1;


$matchs = array();

foreach ($teams as $i) {
	foreach ($teams as $j) {
		if ($i == $j) {
			continue;
		}

		$k = array($i,$j);
		sort($k);

		if (!in_array($k,$matchs)) {
			$matchs["Jornada " .$dayTrip] = $k;
			$dayTrip++;
		}
	}
}
 echo "<pre>";
 print_r($matchs);
 echo "</pre>";
 // foreach ($matchs as $key => $value) {
	// if(is_array($value)){
	// 	foreach ($value as $home => $away) {
	// 		echo $away."--";
	// 	}
	// 	echo "<br>";
	// }
 // }
	// for ($dayTrip = 1; $dayTrip < $numTeams ; $dayTrip++) { 
	// 	echo "<b>Jornada " .$dayTrip."<br></b>";


	// 	for ($i = 1; $i < count($teams) ; $i++) { 
			
	// 		 $aux = $teams[$i];
	// 		 $i++;
	// 		 echo $aux."---".$teams[$i]."<br>";
			
			
	// 	}
	// }

	



 ?>