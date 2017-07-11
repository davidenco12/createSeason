<?php 


$numTeams = $_COOKIE['numTeams'];
$restWell = false;

$teams = array();


for ($i = 1; $i <= $numTeams ; $i++) { 
	$teams[$i] = $_POST['team'.$i];
}

if($numTeams%2 == 1){ 
				// al ser equipos impares,sumo un equipo mas,que será el ficiticio(DESCANSA)
				$teams[] = "DESCANSA";
			}


var_dump($teams);
echo "<br>";
$aux = "";
$dayTrip = 1;

for ($dayTrip = 1; $dayTrip < $numTeams ; $dayTrip++) { 
	echo "Jornada " .$dayTrip."<br>";
		for ($i = 1; $i < count($teams) ; $i++) { 

			

			if($dayTrip%2==0){ //jornada par
			 	$aux = $teams[$i+1];
			 	echo $teams[$i]."---".$aux."<br>";
			 	// echo $teams[$i]."---".$teams[$i+1]."<br>";
			 }else{            //jornada impar
			    $aux = $teams[$i+1];
				echo $aux."---".$teams[$i]."<br>";
			// 	echo $teams[$i+1]."---".$teams[$i]."<br>";
			 }
			
		}

}


 ?>