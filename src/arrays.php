<?php
    function pretty($str, $rez): void
    {
        if($str !== "")
            echo " <h3>",$str,"</h3>","\n";
        if($rez !== "")
            echo "<p class='result'>",$rez,"</p>";
    }
    function handleJsonArray($arr){
        foreach($arr as $key =>$val){
            if(is_array($val))
                handleJsonArray($val);
            else
                pretty("",$key.":".$val);
        }
    }
    //ex1
    $color = ['white', 'green', 'red', 'blue', 'black'];
    $rez = "The memory of that scene for me is like a frame of film forever frozen at that moment:";
    $rez .= "the ".$color[2]." carpet, ";
    $rez .= "the ".$color[1]." lawn, ";
    $rez .= "the ".$color[0]." house, ";
    $rez .= "the leaden sky. The new president and his first lady. - Richard M.Nixon";
    pretty("1)Write a script which will display the following string", $rez);
    //ex2
    $color = ['white', 'green', 'red'];
    $rez = implode(",",$color);
    pretty("2)Write a PHP script which will display the colors in the following way :", $rez.",");
    pretty("","\n");
    $index = [1,2,0];
    foreach($index as $val){
        pretty("",$color[$val]);
    }
    //ex3
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
        "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
        "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
        Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
        "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    $ceu = array_flip($ceu);
    asort($ceu);
    $ceu = array_flip($ceu);
    pretty("3)Create a PHP script which display the capital and country name from the above array \$ceu. Sort the list
                by the name of the country:", "");
    foreach($ceu as $key => $val){
        $rez = "The Capital of ". $key. " is ".$val;
        pretty("",$rez);
    }
    //ex4
    $x = array(1, 2, 3, 4, 5);
    unset($x[3]);
    $x = array_values($x);
    $rez = "";
    foreach($x as $key => $val){
        $rez .= $key. " => ".$val. " ";
    }
    pretty("4)Delete an element from the above PHP array. After deleting the element, integer keys must benormalized", $rez);
    //ex5
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    $rez = $color[array_key_first($color)];
    pretty("5)Write a PHP script to get the first element of the above array", $rez);
    //ex6
    $json = "{\"Title\": \"The Cuckoos Calling\",
            \"Author\": \"Robert Galbraith\",
            \"Detail\": {
            \"Publisher\": \"Little Brown\"
            }}";
    $array = json_decode($json, true);
    pretty("6)Write a PHP script which decode the following JSON string.","");
    handleJsonArray($array);
    //ex7
    function insertAt($arr, $pos, $val){
        $aux = [];
        while($pos > 0){
            if($arr)
            $aux[] = array_shift($arr);
            $pos --;
        }
        array_unshift($arr,$val);
        return array_merge($aux, $arr);
    }
    $array = [1, 2, 3, 4, 5];
    $array = insertAt($array,3,"$");
    pretty("7)Write a PHP script that insert a new item in an array on any position",implode(",", $array));
    //8
    $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
    pretty("8)Write a PHP script that insert a new item in an array on any position","");
    asort($array);
    pretty("a)ascending order sort by value",implode(",", $array));
    ksort($array);
    pretty("b) ascending order sort by Key",implode(",", array_keys($array)));
    arsort($array);
    pretty("c)descending order sort by value",implode(",", $array));
    krsort($array);
    pretty("d) descending order sort by Key",implode(",", array_keys($array)));
    //9
    $array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
        62, 62, 65, 64, 68, 73, 75, 79, 73];
    function avg($array){
        $sum = 0;
        foreach($array as $value){
            $sum += $value;
        }
        return $sum/count($array);
    }
    pretty("9)Write a PHP script to calculate and display average temperature, five lowest and highest temperatures:",avg($array));