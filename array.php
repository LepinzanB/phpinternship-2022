

<br><br>
<h2 >Exercitii</h2>
<h2>Arrays</h2>

<h4>1. Write a script which will display the following string:</h4>

<p>"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet,
    the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M.
    Nixon."<br>
    The words 'red', 'green' and 'white' will come from $color:
    <i>$color = array('white', 'green', 'red', 'blue', 'black');</i><br><br>
    <b>Output: </b>
</p>
<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "'The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2] ." carpet,
    the ".$color[1] ." lawn, the ".$color[0] ." house, the leaden sky. The new president and his first lady. - Richard M.Nixon.' "
?>

<h4>2. Write a PHP script which will display the colors in the following way:</h4>
<p>
    <i>$color = array('white', 'green', 'red');</i><br><br>
    <b>Expected Output: </b>
    white, green, red,<br>
    green<br>
    red<br>
    white<br><br>
    <b>Output:</b>
</p>

<?php
$color = array('white', 'green', 'red');
foreach($color as $item){
    echo $item.", ";
}
echo "<br>";
sort($color);
foreach($color as $item){
    echo $item."<br>";
}
//echo $color[1]."<br>".$color[2]."<br>".$color[0];
?>

<h4>3. Create a PHP script which display the capital and country name from the array $ceu. Sort the list
    by the name of the country.</h4>
<p>
    <i>$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
    Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
        "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");</i><br><br>
    <b>Output:</b>

</p>

<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

asort($ceu);
foreach ($ceu as $key => $value){
    echo nl2br("The capital of ".$key." is ".$value."\n\n");
}
?>


<h4>4. Delete an element from the below PHP array. After deleting the element, integer keys must be normalized.</h4>
<p>
    <i>$x = array(1, 2, 3, 4, 5);</i><br><br>
    <b>Sample Output: </b><br>
    array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }<br>
    array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }<br><br>
    <b>Output: </b>
</p>

<?php
$x = array(1, 2, 3, 4, 5);
echo "array(5) { ";
foreach ($x as $key => $value){
    echo " [".$key."] => int(".$value.")";
}
echo " }";
unset($x[2]);
$x = array_values($x);
echo "<br>";
echo "array(4) { ";
foreach ($x as $key => $value){
    echo " [".$key."] => int(".$value.")";
}
echo " }";
?>

<h4>5. Write a PHP script to get the first element of the below array:</h4>
<p>
    <i> $color = array(4 => 'white', 6 => 'green', 11=> 'red');</i><br><br>
    <b>Expected result:</b> white <br><br>
    <b>Output: </b>
</p>

<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo array_values($color)[0];
?>

<h4>6. Write a PHP script which decode the following JSON string.</h4>
<p>
    <b>Sample JSON code : </b><br><br>
    {"Title": "The Cuckoos Calling",<br>
    "Author": "Robert Galbraith",<br>
    "Detail": {<br>
    "Publisher": "Little Brown"<br>
    }}<br>
    <b>Expected Output: </b> <br>
    Title : The Cuckoos Calling<br>
    Author : Robert Galbraith<br>
    Publisher : Little Brown<br><br>
    <b>Output: </b>
</p>

<?php
$json = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith",
"Detail": { "Publisher": "Little Brown" }}';
$obj = json_decode($json,true);
foreach ($obj as $key => $value) {
    if(is_array($value)){
        foreach ($value as $key1 => $value1) {
            echo nl2br($key1.": ".$value1."\n");
        }
    }
    else{
        echo nl2br($key.": ".$value."\n");
    }
}

?>

<h4>7. Write a PHP script that insert a new item in an array on any position.</h4>
<p>
    <b>Expected Output: </b> <br><br>
    <i>Original array:</i><br>
    1 2 3 4 5<br>
    <i>After inserting '$' the array is:</i><br>
    1 2 3 $ 4 5<br><br>
    <b>Output: </b>
</p>

<?php
$array = [1,2,3,4,5];
echo nl2br("Original array: \n");
foreach ($array as $item) {
    echo $item." ";
}
echo "<br>";
echo nl2br("After inserting '$' the array is: \n");
array_splice($array,2,0,"$");
foreach ($array as $item) {
    echo $item." ";
}
?>

<h4>8. Write a PHP script to sort the following associative array:</h4>
<p>
    <i>array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40")</i> in:<br><br>
    <b>a)</b> ascending order sort by value:<br><br>
    <b>Output: </b>
</p>

<?php
$nameA = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($nameA);
foreach ($nameA as $item)
    echo $item.', ';
?>

<p>
    <b>b)</b> ascending order sort by Key<br><br>
    <b>Output: </b>
</p>

<?php
$nameB = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($nameB);
foreach ($nameB as $key=>$item)
    echo $key.', ';
?>

<p>
    <b>c)</b>  descending order sorting by Value<br><br>
    <b>Output: </b>
</p>

<?php
$nameC = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
rsort($nameC);
foreach ($nameC as $item)
    echo $item.', ';
?>

<p>
    <b>d)</b>  descending order sorting by Key<br><br>
    <b>Output: </b>
</p>

<?php
$nameD = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($nameD);
foreach ($nameD as $key=>$item)
    echo $key.', ';
?>

<h4>9. Write a PHP script to calculate and display average temperature, five lowest and highest
    temperatures.</h4>
<p>
    <i>Recorded temperatures: </i>78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
    62, 62, 65, 64, 68, 73, 75, 79, 73<br><br>
    <b>Expected Output: </b><br><br>
    Average Temperature is : 70.6<br>
    List of seven lowest temperatures : 60, 62, 63, 63, 64,<br>
    List of seven highest temperatures : 76, 78, 79, 81, 85,<br><br>
    <b>Output: </b>
</p>

<?php
$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$avg = 0;
$nr = 0;
$sum = 0;
foreach ($temperature as $temp){
    $sum +=$temp;
    $nr++;
}
$avg = round($sum/$nr,2);
echo nl2br("Average Temperature: ".$avg."\n");
sort($temperature);
echo nl2br("List of five lowest temperatures: ");
for($i = 0;$i<5;$i++){
    echo $temperature[$i].", ";
}
echo "<br>";
echo "List of five highest temperatures :\n";

rsort($temperature);
for($i = 5;$i>0;$i--){
    echo $temperature[$i].", ";
}
?>

<h4>10. Write a PHP program to sort an array of positive integers using the Bead Sort Algorithm.</h4>
<p>
    According to Wikipedia "Bead sort is a natural sorting algorithm, developed by Joshua J. Arulanandham,
    Cristian S. Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of
    bead sort can achieve a sorting time of O(n); however, the implementation of this algorithm tends to be
    significantly slower in software and can only be used to sort lists of positive integers".<br><br>

    <i>Input array:</i> Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 ) <br><br>
    <i>Expected Result:</i> Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1 [8] => 1 [9] => 1 )<br><br>
    <b>Output:</b>
</p>

<?php

?>

<h4>11. Write a PHP program to merge (by index) the following two arrays.</h4>
<p>
    <b>Sample arrays</b>
    $array1 = array(array(77, 87), array(23, 45));<br>
    $array2 = array("w3resource", "com");<br>
    <b>Expected Output:</b><br>
    <pre>
    Array
    (
    [0] => Array
    (
    [0] => w3resource
    [1] => 77
    [2] => 87
    )
    [1] => Array
    (
    [0] => com
    [1] => 23
    [2] => 45
    )
    )
</pre>
    <b>Output:</b>
</p>

<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
function merge_arrays($arr1, $arr2)
{
    $temp = [];
    $temp[] = $arr1;
    if(is_scalar($arr2))
    {
        $temp[] = $arr2;
    }
    else
    {
        foreach($arr2 as $v)
        {
            $temp[] = $v;
        }
    }
        return $temp;
}
echo '<pre>'; print_r(array_map('merge_arrays',$array2,$array1));
?>

