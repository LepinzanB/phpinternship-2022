<?php

$color = ['white', 'green', 'red', 'blue', 'black'];
echo nl2br("<b>1. Write a script which will display the following string - 
 'The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet,
the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M.
Nixon' - and the words 'red', 'green' and 'white' will come from $ color.\n\n</b>");
echo nl2br("Expected output: The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $color[2] . " carpet,
the " . $color[1] . " lawn, the " . $color[0] . " house, the leaden sky. The new president and his first lady. - Richard M.\n\n\n");

$color = ['white', 'green', 'red'];
echo nl2br("<b>2. Write a PHP script which will display the colors in the following way : \n\n</b>");
echo nl2br("Expected output:" . $color[0] . ", " . $color[1] . ", " . $color[2] . ", \n\n\n\n" . $color[1]
    . "\n\n" . $color[2] . "\n\n" . $color[0] . "\n\n\n");

$ceu = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw"];
echo nl2br("<b>3. Create a PHP script which display the capital and country name from the above array $ ceu. Sort the list by the name of the country. \n\n</b>");
foreach ($ceu as $country => $capital) {
    echo nl2br("The capital of " . $country . " is " . $capital . "\n\n");
}

$x = [1, 2, 3, 4, 5];
echo nl2br("<b>\n4. Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. \n\n</b>");
echo nl2br("Sample output : \n\n array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } \n\n");
echo nl2br("\n\n after delete: array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }\n\n");
var_dump($x);
unset($x[3]);
$x = array_values($x);
var_dump($x);
echo nl2br("\n\n");

$color = [4 => 'white', 6 => 'green', 11 => 'red'];
echo nl2br("<b>5. Write a PHP script to get the first element of the above array.\n\n</b>");
var_dump($color);
echo nl2br("Expected output: " . current($color) . "\n\n");

echo nl2br("<b>6. Write a PHP script which decode the following JSON string.\n\n</b>");
$json = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';
$jsonDecode = json_decode($json, true);
foreach ($jsonDecode as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key1 => $item) {
            echo nl2br($key1 . ": " . $item . "\n");
        }
    } else {
        echo nl2br($key . ": " . $value . "\n");
    }
}
echo nl2br("\n");

echo nl2br("<b>7. Write a PHP script that insert a new item in an array on any position.\n\n</b>");
$array = [1, 2, 3, 4, 5];
$itemToBeInserted = ['$'];
echo nl2br("Original array: " . json_encode($array) . "\n\n");
array_splice($array, 3, 0, $itemToBeInserted);
echo "Output: ";
foreach ($array as $item) {
    echo($item . " ");
}
echo nl2br("\n\n");

echo nl2br("<b>8. Write a PHP script to sort the following associative array :\n\n</b>");
function printArray()
{
    $array = ['Sophia' => '31', 'Jacob' => '41', 'William' => '39', 'Ramesh' => '40'];
    foreach ($array as $x => $x_value) {
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

echo nl2br("<b>9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.\n\n</b>");
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = 0;
$counter = 0;
function calculateSum($var1, $var2)
{
    return ($var1 + $var2);
}

$sum = array_reduce($temperatures, "calculateSum", 0);
foreach ($temperatures as $item) {
    $counter++;
}
$avgTemp = $sum / (float)$counter;
echo nl2br("Average temperature is: " . $avgTemp . "\n");
sort($temperatures);
echo nl2br("List of five lowest temperatures: ");
for ($i = 0; $i < 5; $i++) {
    echo $temperatures[$i] . " ";
}
echo nl2br("\n");
echo nl2br("List of five highest temperatures: ");
for ($i = $counter - 5; $i < $counter; $i++) {
    echo $temperatures[$i] . " ";
}

echo nl2br("<b>\n\n10. Write a PHP program to sort an array of positive integers using the Bead Sort Algorithm.\n\n</b>");
$array = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];
echo nl2br("Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 )\n\n");

echo nl2br("<b>11. Write a PHP program to merge (by index) the following two arrays\n\n</b>");
echo nl2br("Sample arrays:\n\n");
$array1 = [[77, 87], [23, 45]];
$array2 = ["w3resource", "com"];

//function mergeIndex($var1, $var2) {
//    $arrTemp = [];
//    $arrTemp[] = $var1;
//    if(is_scalar($var2)) {
//        $arrTemp[] = $var2;
//    } else {
//       foreach ($var2 as $key => $value) {
//           $arrTemp[] = $value;
//       }
//    }
//    return $arrTemp;
//}
//echo nl2br("Output: " . array_map('mergeIndex', $array1, $array2) . "\n");

echo nl2br("<b>12. Write a PHP function to change the following array's all values to upper or lower case.\n\n</b>");
echo nl2br("Sample arrays:\n" . "color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red'); \n\n");
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$arrayTemp = [];
foreach ($color as $key => $value) {
    $value = strtolower($value);
    $arrayTemp[$key] = $value;
}
echo nl2br("Expected output: \nValues are in lower case\n " . json_encode($arrayTemp));
$arrayTemp = [];
foreach ($color as $key => $value) {
    $value = strtoupper($value);
    $arrayTemp[$key] = $value;
}
echo nl2br("\nValues are in upper case\n " . json_encode($arrayTemp));

echo nl2br("<b>\n\n13. Write a PHP script which display all the numbers between 200 and 250 that are divisible by 4.\n\n</b>");
echo "Expected output: ";
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 === 0) {
        echo $i . ", ";
    }
}
echo nl2br("\n\n");

echo nl2br("<b>14. Write a PHP script to get the shortest/longest string length from an array.\n\n</b>");
echo nl2br("Sample arrays: ('abcd','abc','de','hjjj','g','wer')\n\n");
$strings = ['abcd', 'abc', 'de', 'hjjj', 'g', 'wer'];
$longest = 0;
$shortest = 100;
foreach ($strings as $string) {
    if (strlen($string) >= $longest) {
        $longest = strlen($string);
    }
}
foreach ($strings as $string) {
    if (strlen($string) <= $shortest) {
        $shortest = strlen($string);
    }
}
echo nl2br("Expected output: The shortest array length is " . $shortest . ". " . " The longest array length is " . $longest . "\n\n");

echo nl2br("<b>15. Write a PHP script to generate unique random numbers within a range.\n\n</b>");
echo nl2br("Sample Range: (11, 20)\n\n");
echo nl2br("Sample Output: ");
$numbers = range(11, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo $number . " ";
}
echo nl2br("\n\n");

echo nl2br("<b>16. Write a PHP script to get the largest key in an array.\n\n</b>");
$largestKey = max(array_keys($ceu));
echo nl2br("The largest key from array named ceu is: " . $largestKey . "\n\n");

echo nl2br("<b>17. Write a PHP function that returns the lowest integer that is not 0.\n\n</b>");
$numbers = [10, -3, 0, 12, 15];
echo nl2br("Sample array of numbers: " . json_encode($numbers) . "\n\n");
function lowestInteger($numbers)
{
    $lowest = 99999;
    foreach ($numbers as $number) {
        if ($number < $lowest && $number !== 0) {
            $lowest = $number;
        }
    }
    return $lowest;
}

print_r("The lowest number in array is: " . lowestInteger($numbers));
echo nl2br("\n\n");

echo nl2br("<b>18. Write a PHP function to floor decimal numbers with precision.\n</b>Note: Accept three parameters number, precision and separator\n\n");
echo nl2br("Sample Data : \n 1.155, 2, " . "\n100.25781, 4, " . "\n-2.9636, 3 " . "\n");
function floorDecimals($number, $precision, $separator)
{
    $numberPart = explode($separator, $number);
//    echo $numberPart[1];
    $numberPart[1] = substr_replace($numberPart[1], $separator, $precision, 0);
    if ($numberPart[0] >= 0) {
        $numberPart[1] = floor($numberPart[1]);
    } else {
        $numberPart[1] = ceil($numberPart[1]);
    }
    $numberFloored = [$numberPart[0], $numberPart[1]];
    return implode($separator, $numberFloored);
}

echo nl2br("Output:\n");
print_r(floorDecimals(1.155, 2, ".") . "<br>");
print_r(floorDecimals(100.25781, 4, ".") . "<br>");
print_r(floorDecimals(-2.9636, 3, ".") . "<br>");
echo nl2br("\n\n");

echo nl2br("<b>19. Write a PHP script to print 'second' and Red from the following array.\n\n</b>");
echo nl2br("Sample Data : \n 
$ color = array ( 'color' => array ( 'a' => 'Red', 'b' => 'Green', 'c' => 'White'),\n
'numbers' => array ( 1, 2, 3, 4, 5, 6 ),\n
'holes' => array ( 'First', 5 =>'Second', 'Third'));\n");
$color = array('color' => array('a' => 'Red', 'b' => 'Green', 'c' => 'White'),
    'numbers' => array(1, 2, 3, 4, 5, 6),
    'holes' => array('First', 5 => 'Second', 'Third'));
echo "Output: ";
echo $color["holes"][5] . " ";
echo $color["color"]['a'] . "<br>";

echo nl2br("<b>20. Write a PHP function to sort an array according to another array acting as a priority list.\n\n</b>");

echo nl2br("<b>21. Write a PHP function to sort subnets.\n\n</b>");
echo nl2br("Sample input: ['192.169.12', '192.167.11', '192.169.14', '192.168.13', '192.167.12', '122.169.15', '192.167.16']\n");
$subnets = ['192.169.12', '192.167.11', '192.169.14', '192.168.13', '192.167.12', '122.169.15', '192.167.16'];
function sortSubnets($subnet1, $subnet2)
{
    $subnet1Array = explode('.', $subnet1);
    $subnet2Array = explode('.', $subnet2);
    foreach (range(0, 3) as $i) {
        if ($subnet1Array[$i] < $subnet2Array[$i]) {
            return -1;
        } elseif ($subnet1Array[$i] > $subnet2Array[$i]) {
            return 1;
        }
    }
}

usort($subnets, "sortSubnets");
print_r("Output: " . json_encode($subnets) . "<br><br>");

echo nl2br("<b>22. Write a PHP script to sort the following array by the day (page_id) and user name.\n\n</b>");
$arra[0]["transaction_id"] = "2025731470";
$arra[1]["transaction_id"] = "2025731450";
$arra[2]["transaction_id"] = "1025731456";
$arra[3]["transaction_id"] = "1025731460";
$arra[0]["user_name"] = "Sana";
$arra[1]["user_name"] = "Illiya";
$arra[2]["user_name"] = "Robin";
$arra[3]["user_name"] = "Samantha";

function convert_timestamp($timestamp)
{
    return date("Ymd", mktime(0, 0, $timestamp));
}

function cmp($a, $b)
{
    $l = convert_timestamp($a["transaction_id"]);
    $k = convert_timestamp($b["transaction_id"]);
    if ($k == $l) {
        return strcmp($a["user_name"], $b["user_name"]);
    } else {
        return strcmp($k, $l);
    }
}

usort($arra, "cmp");

foreach ($arra as $key => $value) {
    echo "\$array[$key]: ";
    echo $value["transaction_id"];
    echo " user_name: ";
    echo $value["user_name"];
    echo "<br>";
}

echo nl2br("<b>23. Write a PHP program to sort a multi-dimensional array set by specific key.\n\n</b>");
function columnSort($unsorted, $column)
{
    $sorted = $unsorted;
    for ($i = 0; $i < sizeof($sorted) - 1; $i++) {
        for ($j = 0; $j < sizeof($sorted) - 1 - $i; $j++)
            if ($sorted[$j][$column] > $sorted[$j + 1][$column]) {
                $tmp = $sorted[$j];
                $sorted[$j] = $sorted[$j + 1];
                $sorted[$j + 1] = $tmp;
            }
    }
    return $sorted;
}

$my_array = [];
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
print_r(columnSort($my_array, 'name'));
echo "<br><br>";

echo nl2br("<b>24. Write a PHP script to sort an array using case-insensitive natural ordering.\n\n</b>");
$colors = ["color1", "color20", "color3", "color0"];
echo nl2br("Sample input array: " . json_encode($colors) . "\n");
sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
echo "Output: " . json_encode($colors) . "<br><br>";

echo nl2br("<b>25. Write a PHP function to sort entity letters.\n\n</b>");
echo "todo" . "<br><br>";

echo nl2br("<b>26. Write a PHP function to shuffle an associative array, preserving key, value pairs.\n\n</b>");
$colors = array("color1" => "Red", "color2" => "Green", "color3" => "Blue");
echo nl2br("Sample input array: " . json_encode($colors) . "\n");
function shuffleAssociative($colors)
{
    $colorsKeys = array_keys($colors);
    shuffle($colorsKeys);
//    echo json_encode($colorsKeys);
    foreach ($colorsKeys as $key) {
        $shuffledArray[$key] = $colors[$key];
    }
    return $shuffledArray;
}

echo "Output array: ";
print_r(shuffleAssociative($colors));
echo "<br><br>";

echo nl2br("<b>27. Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and other) using shuffle() function.\n\n</b>");

function generateRandomPassword($upper, $lower, $numeric, $specialChars)
{
    $passwordChars = [];
    for ($i = 0; $i < $upper; $i++) {
        $passwordChars[] = chr(rand(65, 90));
    }
    for ($i = 0; $i < $lower; $i++) {
        $passwordChars[] = chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $i++) {
        $passwordChars[] = chr(rand(48, 57));
    }
    for ($i = 0; $i < $specialChars; $i++) {
        $passwordChars[] = chr(rand(33, 47));
    }
    shuffle($passwordChars);
    $password = implode('', $passwordChars);
    return $password;
}

echo "Generated Password : " . generateRandomPassword(3, 3, 3, 3) . "<br><br>";

echo nl2br("<b>28. Write a PHP script to sort an array in reverse order (highest to lowest).\n\n</b>");
$colors = ["Red", "Orange", "Black", "White", "Blue", "Magenta"];
echo("Sample input: " . json_encode($colors) . "<br><br>");
rsort($colors);
echo("Output sorted: " . json_encode($colors) . "<br><br>");

echo nl2br("<b>29. Write a PHP program to generate an array with a range taken from a string.\n\n</b>");
function generateStringFromRange($string)
{
    preg_match_all("/([0-9]{1,2})-?([0-9]{0,2})/", $string, $match);
    $newString = [];
    echo json_encode($match) . "<br>";
    foreach ($match[1] as $key => $value) {
        $newString = array_merge($newString, range($value, (empty($match[2][$key]) ? $value : $match[2][$key])));
    }
    return $newString;
}

$string = '8-15';
echo("Sample string: " . $string . "<br><br>");
print_r(json_encode(generateStringFromRange($string)));
echo "<br><br>";

echo nl2br("<b>30. Write a PHP program to create a letter range with arbitrary length.\n\n</b>");
function createLetterRange($length)
{
    $lettersArray = [];
    $letters = range('a', 'z');
    for ($i = 0; $i < $length; $i++) {
        $position = $i * 26;
        foreach ($letters as $letter) {
            $position++;
            if ($position <= $length)
                $lettersArray[] = ($position > 26 ? $lettersArray[$i - 1] : '') . $letter;
        }
    }
    return $lettersArray;
}

$randNumber = rand(1, 26);
echo "Generated random number: " . $randNumber . "<br><br>";
echo "Output: ";
print_r(json_encode(createLetterRange($randNumber)));
echo "<br><br>";

echo nl2br("<b>31. Write a PHP program to get the index of the highest value in an associative array.\n\n</b>");
$array = ['value1' => 1000, 'value2' => 1234, 'value3' => 7410, 'value4' => 1111, 'value5' => 9876];
echo("Sample array: " . json_encode($array) . "<br><br>");
arsort($array);
$maxIndex = key($array);
echo "Index of the highest value : " . $maxIndex . "<br><br>";

echo nl2br("<b>32. Write a PHP program to get the extension of a file.\n\n</b>");
$file = 'example.txt';
echo "Sample file: " . $file . "<br>";
$afterDot = substr($file, strrpos($file, '.'));
echo "Extension is: " . $afterDot . "<br><br>";

echo nl2br("<b>33. Write a PHP function to search a specified value within the values of an associative array.\n\n</b>");
function arraySearch($array, $search) {
    foreach ($array as $key => $value) {
        if (preg_match("/$search/i", $value)) {
            echo $search . " found in " . $key . " pair". "<br><br>";
            break;
        }
    }
}
$array = ["first" => "PHP array", "second" => "PHP String", "third" => "PHP Math"];
echo("Sample array: " . json_encode($array) . "<br>");
arraySearch($array, "String");

echo nl2br("<b>34. Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values.\n\n</b>");
$array = ['example1', 'Example11', 'example10', 'Example6', 'example4', 'EXAMPLE40', 'example10'];
echo("Sample array: " . json_encode($array) . "<br>");
asort($array, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
echo "Output sorted: " . json_encode($array) . "<br><br>";

echo nl2br("<b>35. Write a PHP script to trim all the elements in an array using array_walk function.\n\n</b>");
$colors = ["Red ", " Green", "Black ", "   White "];
echo("Sample array: ['Red ', '    Green', '    Black ', '       White '] <br>");
function trimVal($key) {
    return trim($key);
}
foreach ($colors as $key=>$value) {
    array_walk($colors, "trimVal");
}
echo "Output sorted: " . json_encode($colors) . "<br><br>";
echo "<br>";

echo nl2br("<b>36. Write a PHP script to lower-case and upper-case, all elements in an array.\n\n</b>");
$colors = ["Red", "Green", "Black", "White"];
echo("Sample array: " . json_encode($colors) . "<br>");
$lowerColors = array_map('strtolower', $colors);
echo("Lower: " . json_encode($lowerColors) . "<br>");
$upperColors = array_map('strtoupper', $colors);
echo("Upper: " . json_encode($upperColors) . "<br><br>");

echo nl2br("<b>37. Write a PHP script to count the total number of times a specific value appears in an array.\n\n</b>");
function countTimes($colors, $match){
    $count = 0;
    foreach ($colors as $value) {
        if ($value === $match) {
            $count++;
        }
    }
    return $count;
}
$colors = ["Red", "Green", "Yellow", "Red"];
echo("Sample array: " . json_encode($colors) . "<br>");
echo "Red color appears ".countTimes($colors, "Red"). " time(s)."."<br><br>";

echo nl2br("<b>38. Write a PHP function to create a multidimensional unique array for any single key index.\n\n</b>");
echo "todo" . "<br><br>";

echo nl2br("<b>39. Write a PHP program to remove duplicate values from an array which contains only strings or only integers.\n\n</b>");
$colors = ['Red', 'Green', 'White', 'Black', 'Red'];
$numbers = [100, 200, 100, -10, -10, 0];
echo("Sample array: " . json_encode($colors) . "<br>");
echo("Sample array: " . json_encode($numbers) . "<br>");
$uniqueColors = array_unique($colors);
$uniqueNumbers = array_unique($numbers);
echo "Unique colors array: " . json_encode($uniqueColors) . "<br>";
echo "Unique numbers array: " . json_encode(array_values($uniqueNumbers)) . "<br><br>";

echo nl2br("<b>40. Write a PHP program to get a sorted array without preserving the keys.\n\n</b>");
$array = ["red", "black", "green", "black", "white", "yellow"];
echo("Sample array: " . json_encode($array) . "<br>");
$arraySortedWithoutPreserving = array_values(array_unique($array));
sort($arraySortedWithoutPreserving);
echo "Sorted array: " . json_encode($arraySortedWithoutPreserving) . "<br><br>";

echo nl2br("<b>41. Write a PHP program to identify the email addresses which are not unique.\n\n</b>");
$array = [];
$array[1]    = 'xyz@example.com';
$array[2]    = 'dse@example.com';
$array[3]    = 'xyz@example.com';
$array[4]    = 'mno@example.com';
echo "todo" . "<br><br>";

echo nl2br("<b>42. Write a PHP function to find unique values from multidimensional arrays and flatten them in zero depth.\n\n</b>");
echo "todo" . "<br><br>";

echo nl2br("<b>43. Write a PHP script to merge two comma separated lists with unique value only.\n\n</b>");
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
echo("Sample lists: " . $list1 . " and " .$list2 ."<br>");
$result = implode("," , array_unique(array_merge(explode(",",$list1), explode(",", $list2))));
echo "Output: " . $result."<br><br>";

echo nl2br("<b>44. Write a PHP a function to remove a specified, duplicate entry from an array.\n\n</b>");
function arrayUnique($array, $entry){
    echo("Remove duplicate entry with value: " . $entry ."<br>");
    $count = 0;
    foreach($array as $key => $value) {
        if (($count > 0) && ($value == $entry) ) {
            unset($array[$key]);
        }
        if ($value == $entry) $count++;
    }
    return array_filter($array);
}
$numbers = [1,2,3,2,7,6,1,3];
echo("Sample array: " . json_encode($numbers) ."<br>");
echo("Output: " . json_encode(arrayUnique($numbers, 3)). "<br><br>");

echo nl2br("<b>45. Write a PHP script to do a multi-dimensional difference, i.e. returns values of the first array that are not in second array.\n\n</b>\nNote : Use array_udiff() function.\n");
echo nl2br("<b>46. Write a PHP function to check whether all array values are strings or not.\n\n</b>");
echo nl2br("<b>47. Write a PHP function to get an array with the first key and value.\n\n</b>");
echo nl2br("<b>48. Write a PHP function to set union of two arrays.\n\n</b>");








