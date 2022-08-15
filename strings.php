<?php
echo "<h1>Exercitii</h1>";

echo "Strings";
//1
echo nl2br("\n1. Write a PHP script to : -\n");
echo nl2br("a) transform a string all uppercase letters.\n");
echo nl2br(strtoupper("Hello WORLD!")."\n");
echo nl2br("b) transform a string all lowercase letters.\n");
echo nl2br(strtolower("Hello WORLD!")."\n");
echo nl2br("c) make a string's first character uppercase.\n");
echo nl2br(Ucfirst ("hello WORLD!")."\n");
echo nl2br("d) make a string's first character of all the words uppercase.\n");
echo nl2br(ucwords("welcome to geeks for geeks")."\n");

//2
echo nl2br("2. Write a PHP script to split the following string.
                 Sample string : '082307'
                 Expected Output : 08:23:07\n");
$str2= '082307';
echo substr(chunk_split($str2, 2, ':'), 0, -1)."\n";

//3
echo nl2br("\n3. Write a PHP script to check if a string contains specific string?
                 Sample string : 'The quick brown fox jumps over the lazy dog.'
                 Check whether the said string contains the string 'jumps'.\n");
if (strpos("The quick brown fox jumps over the lazy dog..", "jumps") !== false){
    echo "Found!";
}else {
    echo "Not found!";
}

//4
echo nl2br("\n4. Write a PHP script to convert the value of a PHP variable to string\n");
$int_var = 12;
$string_var = strval($int_var);
echo "Old type ",  gettype($int_var), " new type ", gettype($string_var);

//5
echo nl2br("\n5.Write a PHP script to extract the file name from the following string.
                   Sample String : 'www.example.com/public_html/index.php'
                   Expected Output : 'index.php'\n");
$str1 = 'www.example.com/public_html/index.php';
echo substr($str1, strripos($str1, '/')+1);

//6
echo nl2br("\n6. Write a PHP script to extract the user name from the following email ID.
                   Sample String : 'rayy@example.com'
                  Expected Output : 'rayy'\n");
$str6 = 'rayy@example.com';
echo strstr($str6, '@', true);

//7
echo nl2br("\n7. Write a PHP script to get the last three characters of a string.\n");
$str7 = 'rayy@example.com';
echo substr($str7, strripos($str7, '.')+1);

//8
echo nl2br("\n8. Write a PHP script to format values in currency style.\n");
$value1 = 64.45;
$value2 = 104.35;
echo number_format((float)($value1 + $value2), 2);

//9
echo nl2br("\n9. Write a PHP script to generate simple random password [do not use rand() function] from a given 
string\n");
$str9 = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($str9),0, 8);

//10
echo nl2br("\n10. Write a PHP script to replace the first 'the' of the following string with 'That'.\n");
$str10 = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str10, 1);

//11
echo nl2br("\n11. Write a PHP script to find first character that is different between two strings.\n");
$str11_1 = 'football';
$str11_2 = 'footboll';
$position = strspn($str11_1 ^ $str11_2, "\0");
echo 5, ':', $str11_1[$position],' vs ', $str11_2[$position];

//12
echo nl2br("\n12. Write a PHP script to get the filename component of the following path.\n");
$str12 = "http://www.w3resource.com/index.php";
$start = strripos($str12, '/')+1;
$end = strripos($str12, '.');
echo substr($str12, $start,$end-$start);

//13
echo nl2br("\n13. Write a PHP script to print the next character of a specific character.\n");
$char13 = 'z';
$nextchar = ++$char13;
if (strlen($nextchar)>1){
    echo $nextchar[0];
}else {
    echo $nextchar;
}

//14
echo nl2br("\n14. Write a PHP script to remove a part of a string from the beginning.
Sample string : 'rayy@example.com'
Expected Output : 'example.com'\n");
$str14 = 'rayy@example.com';
echo substr($str14, strripos($str14, '@')+1);

//15
echo nl2br("\n15. Write a PHP script to get a hex dump of a string.
Sample string : 'rayy@example.com'\n");
$str15 = 'rayy@example.com';
echo bin2hex($str15)."\n";

//16
echo nl2br("\n16. Write a PHP script to insert a string at the specified position in a given string.
Original String : 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output : 'The quick brown fox'\n");
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";

//17
echo nl2br("\n17. Write a PHP script to get the first word of a sentence.
Original String : 'The quick brown fox'
Expected Output : 'The'\n");
echo strtok('The quick brown fox', ' ');

//18
echo nl2br("\n18. Write a PHP script to remove all leading zeroes from a string.
Original String : '000547023.24'
Expected Output : '547023.24'\n");
echo ltrim('000547023.24',"0");

//19
echo nl2br("\n19. Write a PHP script to remove part of a string.
Original String : 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output : 'The quick brown jumps over the lazy dog'\n");
echo str_replace('fox', '','The quick brown fox jumps over the lazy dog');

//20
echo nl2br("\n20. Write a PHP script to remove trailing slash from a string.
Original String : 'The quick brown fox jumps over the lazy dog///'
Expected Output : 'The quick brown fox jumps over the lazy dog'\n");
$str20 = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($str20, '/');

//21
echo nl2br("\n21. Write a PHP script to get the characters after the last '/' in an url.
Sample URL : 'http://www.example.com/5478631'
Expected Output : '5478631'\n");
echo ltrim(strrchr('http://www.example.com/5478631', '/'),'/');

//22
echo nl2br("\n22. Write a PHP script to replace multiple characters from the following string.
Sample String : '1+2/3*2:2-3/4*3'
Expected Output : '1 2 3 2 2 3 4 3'\n");
$str22 = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('"\+/*:-"'),"",$str22);

//23
echo nl2br("\n23. Write a PHP script to select first 5 words from the following string.
Sample String : 'The quick brown fox jumps over the lazy dog'
Expected Output : 'The quick brown fox jumps'\n");
$str23 = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $str23), 0 ,5));

//24
echo nl2br("\n24. Write a PHP script to remove comma(s) from the following numeric string.
Sample String : '2,543.12'
Expected Output : 2543.12\n");
echo str_replace(',',"",'2,543.12');
//25
echo nl2br("\n25. Write a PHP script to print letters from 'a' to 'z'.
Expected Result : abcdefghijklmnopqrstuvwxyz\n");
for ($x = ord('a'); $x <= ord('z'); $x++)
    echo chr($x);
echo "\n";
echo nl2br("\n26. What will display the next code:\n");
echo "Aop";