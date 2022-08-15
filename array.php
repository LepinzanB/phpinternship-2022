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
//8
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

//9
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

//11
echo nl2br("\n11. Write a PHP program to merge (by index) the following two arrays.\n");
$array11_1 = array(array(77, 87), array(23, 45));
$array11_2 = array("w3resource", "com");
foreach ($array11_2 as $key=>$item){
    array_unshift($array11_1[$key], $item);
}
print_r($array11_1);

//12
echo nl2br("\n12. Write a PHP function to change the following array's all values to upper or lower case.\n");
echo nl2br("Values are in lower case.\n");
$Color12 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
print_r(array_map('strtolower', $Color12));
echo nl2br("\nValues are in upper case.\n");
print_r(array_map('strtoupper', $Color12));

//13
echo nl2br("\n13.Write a PHP script which display all the numbers between 200 and 250 that are divisible by 4.\n");
print_r(range(200,250, 4));
//14
echo nl2br("\n14. Write a PHP script to get the shortest/longest string length from an array.\n");
function sort_by_length($a,$b){
    return strlen($b)-strlen($a);
}
$array14 = array("abcd","abc","de","hjjj","g","wer");
usort($array14,'sort_by_length');
echo "The shortest array length is ".strlen($array14[0])." The longest array length is ".strlen(end($array14));

//15
echo nl2br("\n15. Write a PHP script to generate unique random numbers within a range.\n");
$array15 = [];
$start15 = 11;
$end15 = 20;
while (count($array15) <= $end15-$start15){
    $rand_numer = rand($start15, $end15);
    if (!in_array($rand_numer, $array15)) {
        echo $rand_numer . ' ';
        array_push($array15, $rand_numer);
    }
}

//16
echo nl2br("\n16. Write a PHP script to get the largest key in an array.\n");
$arr16 = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
echo max(array_keys($arr16));

//17
echo nl2br("\n17. Write a PHP function that returns the lowest integer that is not 0\n");
$arr17 = [12, 3, 45, 0 ,6, 0, 36];
echo min(array_diff($arr17, array(0)));

//18
echo nl2br("\n18. Write a PHP function to floor decimal numbers with precision.
Note: Accept three parameters number, precision and separator
Sample Data :
1.155, 2, "."
100.25781, 4, "."
-2.9636, 3, "."
\n");
function  floor_decimal_numbers($number, $precision, $separator){
    $str = strval($number);
    return substr($str, 0, stripos($str, $separator)+$precision+1);

}
echo nl2br(floor_decimal_numbers(1.155, 2, ".")."\n");
echo nl2br(floor_decimal_numbers(100.25781, 4, ".")."\n");
echo nl2br(floor_decimal_numbers(-2.9636, 3, ".")."\n");

//19
echo nl2br("\n19. Write a PHP script to print 'second' and Red from the following array.\n");
$color19 = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));
echo $color19["holes"][5]."\n"; // prints "second"
echo $color19["color"]["a"]."\n"; // prints "Red"

//21
echo nl2br("\n21. Write a PHP function to sort subnets\n");

function subnets($subnet){
    $sortSubset = $subnet;
    sort($sortSubset, SORT_STRING );
    return $sortSubset;
}
$subnet_list =
    array('192.169.12',
        '192.167.11',
        '192.169.14',
        '192.168.13',
        '192.167.12',
        '122.169.15',
        '192.167.16'
    );
$sortSubset = subnets($subnet_list);

foreach ($sortSubset as $item){
    echo nl2br($item."\n");
}

//23
echo nl2br("\n21. Write a PHP function to sort subnets\n");

$array23 = array();
$array23[0]['name'] = 'Sana';
$array23[0]['email'] = 'sana@example.com';
$array23[0]['phone'] = '111-111-1234';
$array23[0]['country'] = 'USA';

$array23[1]['name'] = 'Robin';
$array23[1]['email'] = 'robin@example.com';
$array23[1]['phone'] = '222-222-1235';
$array23[1]['country'] = 'UK';

$array23[2]['name'] = 'Sofia';
$array23[2]['email'] = 'sofia@example.com';
$array23[2]['phone'] = '333-333-1236';
$array23[2]['country'] = 'India';
$sort_column = 'name';

echo nl2br("\n23. Write a PHP program to sort a multi-dimensional array set by specific key\n");
array_multisort( array_column($array23, $sort_column), SORT_ASC, $array23);
print_r($array23);

//24
echo nl2br("\n24. Write a PHP script to sort an array using case-insensitive natural ordering.\n");
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
print_r($array2);

//26
echo nl2br("\n26. Write a PHP function to shuffle an associative array, preserving key, value pairs.\n");
$arr26 = array();
$arr26[] = array('id' => 5, 'foo' => 'hello');
$arr26[] = array('id' => 4, 'foo' => 'byebye');
$arr26[] = array('id' => 9, 'foo' => 'foo');

function shuffle_assoc($my_array){
    $keys = array_keys($my_array);
    $new = array();
    shuffle($keys);
    foreach ($keys as $key){
        $new[] = $my_array[$key];
    }
    return $new;
}
print_r(shuffle_assoc($arr26));

//27
echo nl2br("\n27. Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and
other) using shuffle() function.\n");

function rand_pass($num= 12){
    $low_str = "abcdefghijklmnopqrstuvwxyz";
    $up_str = strtoupper($low_str);
    $num_str = "01234567";
    $oth_str = "!@#$%^&*()_<>?=-+/`~";
    $pass_string = str_repeat($low_str, 2).str_repeat($up_str, 2).str_repeat($num_str, 2).str_repeat($oth_str, 3);
    $pass_array = str_split($pass_string);
    shuffle($pass_array);
    return implode(array_slice($pass_array, 0, $num));
}
print_r(rand_pass(12));

//28
echo nl2br("\n28. Write a PHP script to sort an array in reverse order (highest to lowest).\n");
$arr28 = array("Red", "Orange", "Black", "White");
rsort($arr28);
print_r($arr28);

//32
echo nl2br("\n32. Write a PHP program to get the extension of a file.
Example:example.txt'\n");
$file32='example.txt';
echo pathinfo($file32, PATHINFO_EXTENSION);