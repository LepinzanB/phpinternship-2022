<?php
function day2ex1() {
    $color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]." carpet, 
    the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
}

function day2ex2() {
    $color = array('white', 'green', 'red');
    for($i = 0; $i < 3; $i++) {
        echo $color[$i]." ";
    }
    echo "<br>";
    for($i = 0; $i < 3; $i++) {
        echo $color[$i];
        echo "<br>";
    }
}

function day2ex3() {
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
        "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
        "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech 
        Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
        "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    ksort($ceu);
    foreach ($ceu as $country => $capital) {
        echo "The capital of " .$country ." is " .$capital;
        echo "<br>";
    }
}

function day2ex4() {
    $x = array(1, 2, 3, 4, 5);
    unset($x[3]);
    $x = array_values($x);
    print_r($x);
}

function day2ex5() {
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    echo $color[4];
}

function printAssociativeArray($array) {
    foreach ($array as $item => $value) {
        echo $item ." : " .$value;
        echo "<br>";
    }
}

function printArray($array) {
    foreach ($array as $value) {
        echo $value ." ";
    }
}

function day2ex6() {
    $jsonCode = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';
    $decodedJson = json_decode($jsonCode,true);
    //print_r($decodedJson);
    foreach ($decodedJson as $item => $value) {
        if(is_array($value)) {
            printAssociativeArray($value);
        }
        else {
            echo $item ." : " .$value;
            echo "<br>";
        }
    }
}

function day2ex7() {
    $originalArray = [1, 2, 3, 4, 5];
    echo nl2br("Original array: \n");
    printArray($originalArray);
    echo "<br>";
    array_splice($originalArray, 3, 0, '$');
    echo nl2br("After inserting '$' the array is :\n");
    printArray($originalArray);
}

function day2ex8() {
    $arrayToSort = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    echo nl2br("Original array: \n");
    printAssociativeArray($arrayToSort);
    echo nl2br("Ascending order sort by value \n");
    sort($arrayToSort);
    printArray($arrayToSort);
    echo "<br>";
    echo nl2br("Ascending order sort by key \n");
    ksort($arrayToSort);
    printArray($arrayToSort);
    echo "<br>";
    echo nl2br("Descending order sort by value \n");
    rsort($arrayToSort);
    printArray($arrayToSort);
    echo "<br>";
    echo nl2br("Descending order sort by key \n");
    krsort($arrayToSort);
    printArray($arrayToSort);
}

function day2ex9() {
    $recordedTemperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $sum = 0;
    $noOfRecordedTemperatures = count($recordedTemperatures);
    foreach ($recordedTemperatures as $value) {
        $sum += $value;
    }
    echo nl2br("Average temperature is: " .($sum/$noOfRecordedTemperatures) ."\n");
    sort($recordedTemperatures);
    echo nl2br("List of five lowest temperatures: ");
    for($i = 0; $i < 5; $i++) {
        echo $recordedTemperatures[$i] ." ";
    }
    echo nl2br("\nList of five highest temperatures: ");
    for($i = $noOfRecordedTemperatures-5; $i < $noOfRecordedTemperatures; $i++) {
        echo $recordedTemperatures[$i] ." ";
    }
}

function day2ex10() {

}

function day2ex11() {

}

function day2ex12() {
    $color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    foreach ($color as $item => $value) {
        $color[$item] = strtolower($value);
    }
    print_r($color);
    echo "<br>";
    foreach ($color as $item => $value) {
        $color[$item] = strtoupper($value);
    }
    print_r($color);
}