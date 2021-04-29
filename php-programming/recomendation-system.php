<?php
function placesRecomendation($condition = '', $question = ""){
    $weather = array("Bogotá"=>"cold","Montería"=>"hot","Medellín"=>"mild",);
    $ubication = array("Guajira"=>"north", "Leticia"=>"south","Santander"=>"east", "Antioquia"=>"west",);
    $tourism = array("Santa Marta"=>"sea","Villavicencio"=>"plains","Rioacha"=>"desert","Quíndio"=>"valley",);

    switch($condition){
        case "weather":
            $search = $weather;
        break;
        case "ubication":
            $search = $ubication;
        break;
        case "tourism":
            $search = $tourism;
        break;
        default:
            echo "Welcome to Colombia!";
    }

    if (array_search($question,$search)==''){
        $search = "Nothing.";
        echo "The perfect place for you is ",$search;
    }else{echo "The perfect place for you is ".array_search($question,$search);}
    
}
echo placesRecomendation("tourism", "sea"), "\n";