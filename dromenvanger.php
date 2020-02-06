<?php
    $data = array();
    echo("Hoeveel vrienden zal ik vragen om hun droom?").PHP_EOL;
    $hvlVragen = readline("");

    for($i = 1; $i <= $hvlVragen; $i++){
        echo("Wat is je naam?").PHP_EOL;
        $naam = readline("");                             
        echo("Hoeveel dromen ga je opgeven?").PHP_EOL;
        $hvldromen = readline("");
        $data2 = array();
        for($j = 1; $j <= $hvldromen; $j++){
            echo("wat is je droom?").PHP_EOL;
            $droom = readline("");
            array_push($data2,$droom);

        }
        $data[$naam] = $data2;
    }
    foreach($data as $naam => $droom){
        foreach($droom as $data2){
            echo("$naam heeft als droom: $data2").PHP_EOL;
        }
    }

    
    
?>