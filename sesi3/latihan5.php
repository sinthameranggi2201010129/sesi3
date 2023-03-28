<?php
    //MODEL 1
    //$age = array ("Peter"=> "24", "Ben=>"=> "27", "Joe" => "17" ) ;

    //model 2
    $age ['eka'] = "19";
    $age ['dina'] = "18";
    $age ['nadia'] = "20";
    $age ['jeni'] = "17";
    $age ['opa'] = "60";
    $age ['upin'] = "4";
    $age ['ipin'] = "3";

    header("Content-Type: application/json");
    echo json_encode($age);
