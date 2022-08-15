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
echo nl2br("\n\n3.Create a PHP script which display the capital and country name from the above array $ ceu. Sort the list 
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
echo nl2br("\n\n11. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.\n");
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
print_r(range(200, 250, 4));
#14
echo nl2br("\n\n14. Write a PHP script to get the shortest/longest string length from an array.\n");
$array14 = ["abcd","abc","de","hjjj","g","wer"];

function sortByLen($a,$b){
    return strlen($b)-strlen($a);
}
usort($array14,"sortByLen");

echo "The shortest array length is ".strlen(end($array14))." "."The longest array length is"." ".strlen($array14[0]);
#15
echo nl2br("\n\n15. Write a PHP script to generate unique random numbers within a range.\n");
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
    echo $n[$x].' ';
}
echo "\n";
#16
echo nl2br("\n\n16. Write a PHP script to get the largest key in an array.\n");
$max_key = max( array_keys( $ceu) );
echo $max_key."\n";
#17
echo nl2br("\n\n17. Write a PHP function that returns the lowest integer that is not 0\n");
$array17 = [11,10,0,22,8,5,4];
echo min(array_diff($array17, [0]));
#18
echo nl2br("\n\n18. Write a PHP function to floor decimal numbers with precision.\n");
function floDe($number, $precision, $separator){
    $string =strval($number);
    $rs = substr($string,0,stripos($string,$separator)+$precision+1);
    echo nl2br($rs."\n");
};
floDe(1.155,2,".");
floDe(100.25781, 4, ".");
floDe(-2.9636, 3, ".");
#19
echo nl2br("\n\n19. Write a PHP script to print 'second' and Red from the following array.\n");
$color = [ "color" => [ "a" => "Red", "b" => "Green", "c" => "White"],
        "numbers" =>  [ 1, 2, 3, 4, 5, 6 ],
        "holes" => [ "First", 5 => "Second", "Third"]];
echo nl2br($color["holes"][5]."\n");
echo $color["color"]["a"]."\n";
#21
echo nl2br("\n\n21 Write a PHP function to sort subnets.\n");
function subnet_sort($a){
    $subnets = $a;
    sort($subnets,SORT_STRING);
    return $subnets;
};
$list = ['192.169.12', '192.167.11', '192.169.14', '192.168.13', '192.167.12', '122.169.15', '192.167.16'];
$subnets = subnet_sort($list);
foreach ($subnets as $item){
    echo nl2br($item."\n");
};
#23
echo nl2br("\n\n23 Write a PHP program to sort a multi-dimensional array set by specific key.\n");
$my_array[0]['name'] = 'Sana';
$my_array[0]['email'] = 'sana@example.com';
$my_array[0]['phone'] = '111-111-1234';
$my_array[0]['country'] = 'USA';

$my_array[1]['name'] = 'Robin';
$my_array[1]['email'] = 'robin@example.com';
$my_array[1]['phone'] = '222-222-1235';
$my_array[1]['country'] = 'UK';

$my_array[2]['name'] = 'Sofia';
$my_array[2]['email'] = 'sofia@example.com';
$my_array[2]['phone'] = '333-333-1236';
$my_array[2]['country'] = 'India';
array_multisort(array_column($my_array,"name"),SORT_ASC,$my_array);
var_dump($my_array);
#24
echo nl2br("\n\n24 Write a PHP script to sort an array using case-insensitive natural ordering.\n");
$array24 = ['IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png'];
natcasesort($array24);
print_r($array24);
#26
echo nl2br("\n\n26 Write a PHP function to shuffle an associative array, preserving key, value pairs.\n");
$array26 = ["color1" => "Red",
            "color2" => "Green",
            "color3" => "Yellow"];
function shuffleAs($my_array26){
    $keys = array_keys($my_array26);
    shuffle($keys);
    foreach ($keys as $key) {
        $new[$key] = $my_array26[$key];
    }
    $my_array26 = $new;
    print_r($my_array26);
}
shuffleAs($array26);
#27
echo nl2br("\n\n27 Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and 
other) using shuffle() function.\n");
$strLower = "abcdefghijklmnopqrstuvwxyz";
$strUpper = strtoupper($strLower);
$figure = "1234567890";
$specialChr = "~`!@#$%^&*()_+-=|\,./<>?";
$len = implode("",range(1,3))."2";
$len = str_shuffle($len);
$password = substr(str_shuffle($strLower),0,$len[0]).substr(str_shuffle($strUpper),0,$len[1]).substr(str_shuffle($figure),0,$len[2]).substr(str_shuffle($specialChr),0,$len[3]);
echo str_shuffle($password);
#28
echo nl2br("\n\n28. Write a PHP script to sort an array in reverse order (highest to lowest).\n");
$array28 = ["Banana", "Orange", "Apple", "Mango"];
rsort($array28);
print_r($array28);
#32
echo nl2br("\n\n32. Write a PHP program to get the extension of a file.\n");
$file32='example.txt';
echo pathinfo($file32, PATHINFO_EXTENSION);