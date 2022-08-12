<?php

$color = ['white', 'green', 'red', 'blue', 'black'];
echo nl2br("1. Write a script which will display the following string - 
 'The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet,
the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M.
Nixon' - and the words 'red', 'green' and 'white' will come from $ color.\n\n");
echo nl2br("Expected output: The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $color[2] . " carpet,
the " . $color[1] . " lawn, the " . $color[0] . " house, the leaden sky. The new president and his first lady. - Richard M.\n\n\n");

$color = ['white', 'green', 'red'];
echo nl2br("2. Write a PHP script which will display the colors in the following way : \n\n");
echo nl2br("Expected output:" . $color[0] . ", " . $color[1] . ", " . $color[2] . ", \n\n\n\n" . $color[1]
    . "\n\n" . $color[2] . "\n\n" . $color[0] . "\n\n\n");

$ceu = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw"];
echo nl2br("3. Create a PHP script which display the capital and country name from the above array $ ceu. 
    Sort the list by the name of the country. \n\n");
foreach($ceu as $country => $capital) {
    echo nl2br("The capital of " . $country . " is " . $capital . "\n\n");
}

$x = [1, 2, 3, 4, 5];
echo nl2br("\n4. Delete an element from the above PHP array. After deleting the element, integer keys must be
     normalized. \n\n");
echo nl2br("Sample output : \n\n array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } \n\n");
echo nl2br("\n\n after delete: array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }\n\n");
var_dump($x);
unset($x[3]);
$x = array_values($x);
var_dump($x);
echo nl2br("\n\n");

$color = [4 => 'white', 6 => 'green', 11=> 'red'];
echo nl2br("5. Write a PHP script to get the first element of the above array.\n\n");
var_dump($color);
echo nl2br("Expected output: " . current($color) . "\n\n");

echo nl2br("6. Write a PHP script which decode the following JSON string.\n\n");
$json = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';
$jsonDecode = json_decode($json, true);
foreach ($jsonDecode as $key => $value) {
    if(is_array($value)) {
        foreach ($value as $key1 => $item) {
            echo nl2br($key1 . ": " . $item . "\n");
        }
    } else {
        echo nl2br($key . ": ". $value . "\n");
    }
}
echo nl2br("\n");

echo nl2br("7. Write a PHP script that insert a new item in an array on any position.\n\n");
$array = [1,2,3,4,5];
$itemToBeInserted = ['$'];
echo nl2br("Original array: " . json_encode($array) . "\n\n");
array_splice($array, 3, 0, $itemToBeInserted);
echo "Output: ";
foreach ($array as $item){
    echo ($item . " ");
}
echo nl2br("\n\n");

echo nl2br("8. Write a PHP script to sort the following associative array :\n\n");
function printArray() {
    $array = ['Sophia'=>'31','Jacob'=>'41','William'=>'39','Ramesh'=>'40'];
    foreach($array as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo nl2br("\n\n");
}
echo nl2br("array('Sophia'=>'31','Jacob'=>'41','William'=>'39','Ramesh'=>'40') in\n\n");
echo nl2br("a) ascending order sort by value\n\n");
asort($array);
printArray();

echo nl2br("b) ascending order sort by Key\n\n");
ksort($array);
printArray();

echo nl2br("c) descending order sorting by Value\n\n");
arsort($array);
printArray();

echo nl2br("d) descending order sorting by Key\n\n");
krsort($array);
printArray();

echo nl2br("9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.\n\n");
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = 0;
$counter = 0;
function calculateSum($var1, $var2) {
    return ($var1 + $var2);
}
$sum = array_reduce($temperatures, "calculateSum", 0);
foreach($temperatures as $item) {
    $counter++;
}
$avgTemp = $sum / (float)$counter;
echo nl2br("Average temperature is: " . $avgTemp . "\n");
sort($temperatures);
echo nl2br("List of five lowest temperatures: ");
for($i = 0;$i < 5;$i++) {
    echo $temperatures[$i] . " ";
}
echo nl2br( "\n");
echo nl2br("List of five highest temperatures: ");
for($i = $counter-5;$i < $counter;$i++) {
    echo $temperatures[$i] . " ";
}

echo nl2br("10. Write a PHP program to sort an array of positive integers using the Bead Sort Algorithm.\n\n");


















