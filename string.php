
<br><br>
<h2 >Exercitii</h2><br>
<h2>Strings</h2>
    <h4>1. Write a PHP script to:</h4>
<p><b> a) </b> Transform a string all uppercase letters.<br></p>
<?php
$uppercaseString = "string";
echo $uppercaseString." ==> ".strtoupper($uppercaseString)."\n";
?>

<p><b> b) </b> Transform a string all lowercase letters.<br></p>

<?php
$lowercaseString = "STRING";
echo $lowercaseString." ==> ".strtolower($lowercaseString)."\n";
?>

<p><b> c) </b> Make a string's first character uppercase.<br></p>

<?php
$firstLetter = "hello";
echo $firstLetter." ==> ".ucfirst($firstLetter)."\n";
?>

<p><b> d) </b> Make a string's first character of all the words uppercase.
    <br></p>

<?php
$firstLetterOfAllWords = "hello world!";
echo $firstLetterOfAllWords." ==> ".ucwords($firstLetterOfAllWords)."\n";
?>

<h4>2. Write a PHP script to split the following string.</h4>
<p> <b>Sample string: </b> 082307 <br>
    <b>Output: </b>
<?php
$splitString = "082307";
$expectedString = "";

$var = substr_replace($splitString,":",2,0);
echo substr_replace($var,":",5,0)."\n";

?>
</p>

<h4>3. Write a PHP script to check if a string contains specific string?</h4>
<p><b>Sample string : </b> 'The quick brown fox jumps over the lazy dog.'<br>
    Check whether the said string contains the string 'jumps'.</p>

<?php
$containsString = "The quick brown fox jumps over the lazy dog.";
echo $containsString." ==> position: ".strpos($containsString,"jumps")."\n";
?>

<h4>4. Write a PHP script to convert the value of a PHP variable to string.</h4>

<?php
$value = 2;
$valueToString = (string)$value;
echo nl2br($value." ==> ".$valueToString."\n");
echo gettype($value)." ==> ".gettype($valueToString);
?>

<h4>5.Write a PHP script to extract the file name from the following string.</h4>
<p>
    <b>Sample String: </b> www.example.com/public_html/index.php <br>
    <b>Output: </b>
    <?php
$urlString = "www.example.com/public_html/index.php";
echo substr($urlString,strrpos($urlString,"/") + 1);
    ?>
</p>

<h4>6. Write a PHP script to extract the user name from the following email ID.</h4>
<p>
    <b>Sample String: </b> rayy@example.com <br>
    <b>Output: </b>
    <?php
    $emailString = "rayy@example.com";
    echo strstr($emailString, '@', true)
    ?>
</p>

<h4>7. Write a PHP script to get the last three characters of a string.</h4>
<p>
    <b>Sample String: </b> rayy@example.com <br>
    <b>Output: </b>
    <?php
    $last3Characters = "rayy@example.com";
    echo substr($last3Characters,-3);
    ?>
</p>

<h4>8. Write a PHP script to format values in currency style.</h4>
<p>
    <b>Sample String: </b> value1 = 65.45, value2 = 104.35 <br>
    <b>Output: </b>
    <?php
    $value1 = 65.45;
    $value2 = 104.35;
    echo sprintf("%1.2f", $value1+$value2)."\n";
    ?>
</p>

<h4>9. Write a PHP script to generate simple random password [do not use rand() function] from a given string.</h4>
<p>
    <b>Sample String: </b> 1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz <br>
    <b>Output: </b>
    <?php
    $string = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    echo substr(str_shuffle($string),0,7);
    ?>
</p>

<h4>10. Write a PHP script to replace the first 'the' of the following string with 'That'.</h4>
<p>
    <b>Sample String: </b> 'the quick brown fox jumps over the lazy dog.' <br>
    <b>Output: </b>
    <?php
    $replace = "the quick brown fox jumps over the lazy dog.";
    echo preg_replace('/the/','That',$replace,1);
    ?>
</p>

<h4>11. Write a PHP script to find first character that is different between two strings.</h4>
<p>
    <b>String1: </b>'football'<br>
    <b>String2: </b>'footboll'<br>
    <b>Result: </b>
    <?php
    $string1 = "football";
    $string2 = "footboll";
    $position = strspn($string1 ^ $string2, "\0");
    printf("First difference between two strings at position %d: '%s' vs '%s'",$position,$string1[$position],$string2[$position]);
    ?>
</p>

<h4>12. Write a PHP script to get the filename component of the following path.</h4>
<p>
    <b>Sample path: </b> "http://www.w3resource.com/index.php"<br>
    <b>Output: </b>
    <?php
    $path = "http://www.w3resource.com/index.php";
    echo basename($path,'.php');
    ?>
</p>

<h4>13. Write a PHP script to print the next character of a specific character.</h4>
<p>
    <b>Sample character: </b>'a'<br>
    <b>Output: </b>
    <?php
    $chA = 'a';
    echo ++$chA;
    ?>
    <br>
    <b>Sample character: </b>'z'<br>
    <b>Output: </b>
    <?php
    $chZ = 'z';
    $next_chZ = ++$chZ;
    if(strlen($next_chZ) > 1)
        echo $next_chZ[0];
    ?>
    <br>
</p>

<h4>14. Write a PHP script to remove a part of a string from the beginning.</h4>
<p>
    <b>Sample String: </b> rayy@example.com <br>
    <b>Output: </b>
    <?php
    $removeString = "rayy@example.com";
    $stringToBeRemoved = "rayy@";
    echo ltrim($removeString,$stringToBeRemoved);
    ?>
</p>

<h4>15. Write a PHP script to get a hex dump of a string.</h4>
<p>
    <b>Sample String: </b> rayy@example.com <br>
    <b>Output: </b>
    <?php
    $hexString = "rayy@example.com";
    echo bin2hex($hexString);
    ?>
</p>

<h4>16. Write a PHP script to insert a string at the specified position in a given string.</h4>
<p>
    <b>Original String: </b> 'The brown fox' <br>
    Insert 'quick' between 'The' and 'brown'.<br>
    <b>Output: </b>
    <?php
    $insertString = "The brown fox";
    echo substr_replace($insertString," quick ",3,0)
    ?>
</p>

<h4>17. Write a PHP script to get the first word of a sentence.</h4>
<p>
    <b>Original String: </b> 'The quick brown fox' <br>
    <b>Output: </b>
    <?php
    $firstWord = "The quick brown fox";
    $arr = explode(' ',$firstWord);
    echo $arr[0];
    ?>
</p>

<h4>18. Write a PHP script to remove all leading zeroes from a string.</h4>
<p>
    <b>Original String: </b> '000547023.24' <br>
    <b>Output: </b>
    <?php
    $leadingZeroes = "000547023.24";
    echo ltrim($leadingZeroes,"0");
    ?>
</p>

<h4>19. Write a PHP script to remove part of a string.</h4>
<p>
    <b>Original String: </b> 'The quick brown fox jumps over the lazy dog.' <br>
    Remove 'fox' from the above string.<br>
    <b>Output: </b>
    <?php
    $removePartOfString = "The quick brown fox jumps over the lazy dog.";
    echo str_replace("fox"," ",$removePartOfString);
    ?>
</p>

<h4>20. Write a PHP script to remove trailing slash from a string.</h4>
<p>
    <b>Original String: </b> 'The quick brown fox jumps over the lazy dog.///' <br>
    Remove 'fox' from the above string.<br>
    <b>Output: </b>
    <?php
    $removeTrailingSlash = "The quick brown fox jumps over the lazy dog.///";
    echo rtrim($removeTrailingSlash,'/');
    ?>
</p>

<h4>21. Write a PHP script to get the characters after the last '/' in an url.</h4>
<p>
    <b>Sample: </b>  'http://www.example.com/5478631' <br>
    <b>Output: </b>
    <?php
    $urlCharacter = "http://www.example.com/5478631";
    echo substr($urlCharacter, strrpos($urlCharacter, '/') + 1);
    ?>
</p>

<h4>22. Write a PHP script to replace multiple characters from the following string.</h4>
<p>
    <b>Sample: </b> '\"\1+2/3*2:2-3/4*3' <br>
    <b>Output: </b>
    <?php
    $replaceMultipleCharacters = '\"\1+2/3*2:2-3/4*3';
    $characters = '\\/"+*:-';
    echo str_replace(str_split($characters)," ",$replaceMultipleCharacters);
    ?>
</p>

<h4>23. Write a PHP script to select first 5 words from the following string.</h4>
<p>
    <b>Sample: </b> 'The quick brown fox jumps over the lazy dog' <br>
    <b>Output: </b>
    <?php
    $first5Words = "The quick brown fox jumps over the lazy dog";
    echo implode(' ',array_slice(explode(' ',$first5Words),0,5));
    ?>
</p>

<h4>24. Write a PHP script to remove comma(s) from the following numeric string</h4>
<p>
    <b>Sample: </b> '2,543.12' <br>
    <b>Output: </b>
    <?php
    $commas = "'2,543.12'";
    echo str_replace(",","",$commas);
    ?>
</p>

<h4>25. Write a PHP script to print letters from 'a' to 'z'.</h4>
<p>

    <b>Expected Result</b> : abcdefghijklmnopqrstuvwxyz<br>
    <b>Output: </b>
</p>

<?php
foreach (range('a', 'z') as $char) {
    echo $char;
}
?>

<h4>26. What will display the next code:</h4>
<p>
    $d = 'Aoo';<br>
    echo ++$d;<br>
    <b>Output: </b> Aop
</p>

