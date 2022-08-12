<?php
#1
echo nl2br("1.Write a script which will display the following string -\n");
echo nl2br("The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, 
the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon\n");
$color  = ['white', 'green', 'red', 'blue', 'black'];
$string1 = "\n\nThe memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, 
the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon\n";
echo nl2br($string1);
#2
echo nl2br("\n\n2. Write a PHP script which will display the colors in the following way \n");
$color = array('white', 'green', 'red');
foreach ($color as $id){
    echo  $id.",";
};
echo nl2br("\n");
//foreach ($color as $id){
//    echo nl2br("\n".next($color));
//    if ($id == $color[count($color)-1]){
//        echo nl2br($color[0]);
//    }
//}
sort($color);
foreach ($color as $id){
    echo  nl2br("\n".$id);
};
#3
echo nl2br("3.Create a PHP script which display the capital and country name from the above array $ ceu. Sort the list 
by the name of the country.");

$ceu = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];
echo nl2br("\n");
ksort($ceu);
foreach ($ceu as $key => $value){
    echo nl2br("\n"."The capital of ".$key." is ".$value);
}
#4
echo nl2br("\n\n4.Delete an element from the above PHP array. After deleting the element, integer keys must be 
normalized.\n");
$x = [1,2,3,4,5];
var_dump($x);
unset($x[3]);
$x = array_values($x);
var_dump($x);
#5
echo nl2br("\n\n5. Write a PHP script to get the first element of the above array.\n");
$color = [4 => 'white', 6 => 'green', 11=> 'red'];
echo $color[4];
#6
echo nl2br("\n\n6. Write a PHP script which decode the following JSON string\n");
$Json = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

$Json = json_decode($Json,true);
foreach ($Json as $key => $value) {
    if ($key !== "Detail"){
        echo nl2br($key.": ".$value."\n") ;
    }
    else{
        foreach ($Json[$key] as $k2=>$v2){
            echo nl2br($k2.": ".$v2."\n");
        }
    }
}
#7
echo nl2br("\n\n7. Write a PHP script that insert a new item in an array on any position.\n");
$array7 = [1,2,3,4,5];
array_splice($array7, 3,0,"$");
foreach ($array7 as $x){
    echo $x." ";
}
#8
echo nl2br("\n\n8. Write a PHP script to sort the following associative array :\n");
$array8 = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
asort($array8);
echo "a) ";
foreach ($array8 as $key => $value) {
    echo "Age of ".$key." is ".$value.";  ";
}
ksort($array8);
echo nl2br("\n\nb) ");
foreach ($array8 as $key => $value) {
    echo "Age of ".$key." is ".$value.";  ";
}
arsort($array8);
echo nl2br("\n\nc) ");
foreach ($array8 as $key => $value) {
    echo "Age of ".$key." is ".$value.";  ";
}
krsort($array8);
echo nl2br("\n\nd) ");
foreach ($array8 as $key => $value) {
    echo "Age of ".$key." is ".$value.";  ";
}
#9
echo nl2br("\n\n9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.\n");
$tempe = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
    62, 62, 65, 64, 68, 73, 75, 79, 73];
$avgTemp =0;
foreach ($tempe as $fig){
    $avgTemp += $fig;
}
echo number_format((float)($avgTemp/count($tempe)),1);
echo nl2br("\n");

sort($tempe);
foreach(array_splice($tempe,0,7) as $item){
    echo $item.",";
};
echo nl2br("\n");
rsort($tempe);
foreach(array_splice($tempe,0,7) as $item){
    echo $item.",";
};
#11
echo nl2br("\n\n9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.\n");
$array11 = array(array(77, 87), array(23, 45));
$array21 = array("w3resource", "com");

foreach ($array21 as $key=>$item){
    array_unshift($array11[$key],$item);
};
print_r($array11);
#12
echo nl2br("\n\n12. Write a PHP function to change the following array's all values to upper or lower case.\n");
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
function toup($cc){
    return(strtoupper($cc));
}
function tolow($cc){
    return(strtolower($cc));
}
print_r(array_map("tolow",$Color));
echo nl2br("\n");
print_r(array_map("toup",$Color));
#13
echo nl2br("\n\n13.Write a PHP script which display all the numbers between 200 and 250 that are divisible by 4.\n");

