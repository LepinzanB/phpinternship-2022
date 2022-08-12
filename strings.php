<?php
echo "<h1>Exercitii</h1>";

echo "Strings";
echo nl2br("1. Write a PHP script to : -\n");
echo nl2br("a) transform a string all uppercase letters.\n");
echo nl2br(strtoupper("Hello WORLD!")."\n");
echo nl2br("b) transform a string all lowercase letters.\n");
echo nl2br(strtolower("Hello WORLD!")."\n");
echo nl2br("c) make a string's first character uppercase.\n");
echo nl2br(Ucfirst ("hello WORLD!")."\n");
echo nl2br("d) make a string's first character of all the words uppercase.\n");
echo nl2br(ucwords("welcome to geeks for geeks")."\n");

echo nl2br("2. Write a PHP script to split the following string.
                 Sample string : '082307'
                 Expected Output : 08:23:07\n");


echo nl2br("3. Write a PHP script to check if a string contains specific string?
                 Sample string : 'The quick brown fox jumps over the lazy dog.'
                 Check whether the said string contains the string 'jumps'.\n");
if (strpos("The quick brown fox jumps over the lazy dog..", "jumps") !== false){
    echo "Found!";
}else {
    echo "Not found!";
}
echo nl2br("\n4. Write a PHP script to convert the value of a PHP variable to string\n");
$int_var = 12;
$string_var = strval($int_var);

echo "Old type ",  gettype($int_var), " new type ", gettype($string_var);
echo nl2br("\n5.Write a PHP script to extract the file name from the following string.
                   Sample String : 'www.example.com/public_html/index.php'
                   Expected Output : 'index.php'\n");
$str1 = 'www.example.com/public_html/index.php';
echo substr($str1, strripos($str1, '/')+1);

echo nl2br("\n6. Write a PHP script to extract the user name from the following email ID.
                   Sample String : 'rayy@example.com'
                  Expected Output : 'rayy'\n");
$str6 = 'rayy@example.com';
echo strstr($str6, '@', true);

echo nl2br("\n7. Write a PHP script to get the last three characters of a string.\n");
$str7 = 'rayy@example.com';
echo substr($str7, strripos($str7, '.')+1);

echo nl2br("\n8. Write a PHP script to format values in currency style.\n");

$value1 = 64.45;
$value2 = 104.35;
echo number_format((float)($value1 + $value2), 2);
echo nl2br("\n9. Write a PHP script to generate simple random password [do not use rand() function] from a given 
string\n");
$str9 = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($str9),0, 8);

echo nl2br("\n10. Write a PHP script to replace the first 'the' of the following string with 'That'.\n");
$str10 = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str10, 1);

echo nl2br("\n11. Write a PHP script to find first character that is different between two strings.\n");
$str11_1 = 'football';
$str11_2 = 'footboll';
$position = strspn($str11_1 ^ $str11_2, "\0");
echo 5, ':', $str11_1[$position],' vs ', $str11_2[$position];
echo nl2br("\n12. Write a PHP script to get the filename component of the following path.\n");
$str12 = "http://www.w3resource.com/index.php";
$start = strripos($str12, '/')+1;
$end = strripos($str12, '.');
echo substr($str12, $start,$end-$start);

echo nl2br("\n13. Write a PHP script to print the next character of a specific character.\n");
$char13 = 'z';
$nextchar = ++$char13;
if (strlen($nextchar)>1){
    echo $nextchar[0];
}else {
    echo $nextchar;
}


