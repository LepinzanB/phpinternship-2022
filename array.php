<?php
function printArrValKey($arr){
    foreach ($arr as $key=>$item){
        echo $key."=>".$item."\n";
    }
}
//1
echo nl2br("1. Write a script which will display the following string -\n");
$color1 = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color1[2]} carpet,
the {$color1[1]} lawn, the {$color1[0]} house, the leaden sky. The new president and his first lady. - Richard M.
Nixon";
//2
echo nl2br("\n2. Write a PHP script which will display the colors in the following way :\n");
$color2 = array('white', 'green', 'red');
foreach ($color2 as $item){
    echo $item, ' ';
}
sort($color2);
foreach ($color2 as $item){
    echo nl2br("\n{$item}\n");
}
//3
echo nl2br("\n3. Create a PHP script which display the capital and country name from the above array. Sort the list by the name of the country.\n");
$ceu3 = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
ksort($ceu3);
foreach ($ceu3 as $key => $value){
    echo nl2br("The capital of {$key} is {$value}\n");
}
//4
echo nl2br("\n4. Delete an element from the above PHP array. After deleting the element, integer keys must be normalized\n");
$x4 = array(1, 2, 3, 4, 5);
$random_index = array_rand($x4);
$random_element = $x4[$random_index];
unset($x4[$random_element]);
print_r(array_values($x4));

//5
echo nl2br("\n5.Write a PHP script to get the first element of the above array.\n");
$color5 = array(4 => 'white', 6 => 'green', 11=> 'red');
echo array_shift($color5);

//6
echo nl2br("\n6. Write a PHP script which decode the following JSON string. Sample JSON code :\n");
$array6 = json_decode('{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": {"Publisher": "Little Brown"}}', true);
function print_array($array){
    foreach ($array as $key => $item){
        if (is_array($item)){
            print_array($item);
        }
        else{
            echo nl2br($key.':'.$item."\n");
        }
    }
}
print_array($array6);

//7
echo nl2br("\n7. Write a PHP script that insert a new item in an array on any position\n");
$array7 = [1, 2, 3, 4, 5];
$inserted_value = '$';
$position = 2;
array_splice( $array7, $position, 0, $inserted_value );
foreach ($array7 as $item){
    echo $item.' ';
}
echo nl2br("\n8. Write a PHP script to sort the following associative array :");
$array8 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo nl2br("\na) ascending order sort by value\n");
asort($array8);
printArrValKey($array8);
echo nl2br("\nb) ascending order sort by Key\n");
arsort($array8);
printArrValKey($array8);
echo nl2br("\nc) descending order sorting by Value\n");
ksort($array8);
printArrValKey($array8);
echo nl2br("\nd) descending order sorting by Key\n");
krsort($array8);
printArrValKey($array8);

echo nl2br("\n9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.\n");
$array9 = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
sort($array9);

echo "Average Temperature is : ".array_sum($array9)/count($array9);
echo nl2br("\nList of seven lowest temperatures ");
$unique9 = array_unique($array9, SORT_REGULAR );
foreach(array_slice($unique9, 0, 7) as $item){
    echo " ".$item.",";
}
echo nl2br("\nList of seven highest temperatures ");
foreach(array_slice($unique9, -7, 7) as $item){
    echo " ".$item.",";
}



