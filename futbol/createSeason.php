<?php 


 $numTeams = $_COOKIE['numTeams'];


 $teams = array();



 for ($i = 1; $i <= $numTeams ; $i++) { 
 	$teams[$i] = $_POST['team'.$i];
 }

if($numTeams%2 == 1){ 
 				// al ser equipos impares,sumo un equipo mas,que será el ficiticio(DESCANSA)
    array_push($teams,"DESCANSA");
 				// $teams.push[] = "DESCANSA";
 			}





$firstLap = 0;
function generatorSeason($teams){
    if (count($teams)%2 != 0){
        array_push($teams,"DESCANSA");
    }
    $away = array_splice($teams,(count($teams)/2));
    $home = $teams;
    for ($i=0; $i < count($home)+count($away)-1; $i++){
        for ($j=0; $j<count($home); $j++){
            $round[$i][$j]["Home"]=$home[$j];
            $round[$i][$j]["Away"]=$away[$j];
        }
        if(count($home)+count($away)-1 > 2){
            array_unshift($away,current(array_splice ($home, 1,1)));
            array_push($home,array_pop($away));
        }
    }
    return $round;
}

$generatorSeason = generatorSeason($teams);

// first lap
foreach($generatorSeason as $round => $games){
    echo "Jornada ".($round+1)."<br>";
    
    foreach($games as $play){
    	if(($round+1) %2 != 0){
    		echo $play["Away"]." - ".$play["Home"]."<br>";

    	}else{
    		echo $play["Home"]." - ".$play["Away"]."<br>";
    	}
        
    }
    $firstLap++; 
    echo "<br>";
}
// second lap
foreach($generatorSeason as $round => $games){
    echo "Jornada ".($firstLap+1)."<br>";
    
    foreach($games as $play){
    	if($firstLap %2 != 0){
    		echo $play["Home"]." - ".$play["Away"]."<br>";

    	}else{
    		echo $play["Away"]." - ".$play["Home"]."<br>";
    	}
        
    }
    $firstLap++;
    echo "<br>";
}



// foreach($generatorSeason as $round => $games){
//     echo "Jornada ".($round+1)."<br>";
//     foreach($games as $play){
//     	if(($round+1) %2 != 0){
//     		echo $play["Away"]." - ".$play["Home"]."<br>";

//     	}else{
//     		echo $play["Home"]." - ".$play["Away"]."<br>";
//     	}
        
//     }
//     echo "<br>";
// }



	



 ?>