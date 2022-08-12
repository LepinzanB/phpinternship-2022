<?php
$_string = "hELLO world!";
$_splitStringAux = "";
echo nl2br("1. Write a PHP script to: \n\n");
echo nl2br("a) transform a string all uppercase letters.\n\n");
echo nl2br("from " . $_string . " to " . strtoupper($_string) . "\n\n");
echo nl2br("b) transform a string all lowercase letters.\n\n");
echo nl2br("from " . $_string . " to " . strtolower($_string) . "\n\n");
echo nl2br("c) make a string's first character uppercase.\n\n");
echo nl2br("from " . $_string . " to " . ucfirst($_string) . "\n\n");
echo nl2br("d) make a string's first of all the words uppercase.\n\n");
echo nl2br("from " . $_string . " to " . ucwords($_string) . "\n\n");

echo nl2br("\n\n2. Write a PHP script to split the following string.\n\n");
$_splitString = "082307";
for ($i = 0; $i < strlen($_splitString); $i++) {
    if (($i+1) % 2 === 0) {
        $_splitStringAux .= $_splitString[$i] . ":";
    } else {
        $_splitStringAux .= $_splitString[$i];
    }
}
//$var = substr_replace($_splitString,":",2,0);
//echo substr_replace($var,":",5,0)."\n";

$_splitStringAux[strlen($_splitStringAux)-1] = " ";
echo nl2br("Sample string: " . $_splitString . "\n\n");
echo nl2br("Expected output: " . $_splitStringAux . "\n\n");

echo nl2br("\n\n3. Write a PHP script to check if a string contains specific string?\n\n");
$_string3 = "The quick brown fox jumps over the lazy dog.";
echo nl2br("Sample string: " . $_string3 . "\n\n");
echo nl2br($_string3 . " ---> jumps found at position " .strpos($_string3, "jumps") . "\n\n");

echo nl2br("\n\n4. Write a PHP script to convert the value of a PHP variable to string.\n\n");
$_number = 1234;
$_stringNumber = (string)$_number;
echo nl2br("from number: " . $_number . " converted to " . gettype($_stringNumber) . ": " . $_stringNumber . "\n\n");

echo nl2br("\n\n5. Write a PHP script to extract the file name from the following string.\n\n");
$_fileName = "www.example.com/public_html/index.php";
echo nl2br("Sample string: " . $_fileName . "\n\n");
echo nl2br("(variant 1) Expected output: " . substr($_fileName, strlen($_fileName)-9) . "\n\n");
echo nl2br("(variant 2) Expected output: " . substr($_fileName, strrpos($_fileName, "/")+1) . "\n\n");

echo nl2br("\n\n6. Write a PHP script to extract the user name from the following email ID.\n\n");
$_email = "rayy@example.com";
echo nl2br("Sample string: " . $_email . "\n\n");
echo nl2br("(variant 1) Expected output: " . substr($_email, 0, strpos($_email, "@")) . "\n\n");
echo nl2br("(variant 2) Expected output: " . strstr($_email, "@", true) . "\n\n");

echo nl2br("\n\n7. Write a PHP script to get the last three characters of a string.\n\n");
echo nl2br("Sample string: " . $_email . "\n\n");
echo nl2br("Expected output: " . substr($_email,-3) . "\n\n");

echo nl2br("\n\n8. Write a PHP script to format values in currency style.\n\n");
$_value1 = 65.45;
$_value2 = 104.35;
echo nl2br("Sample string: value1 = " . $_value1 . ", value2 =  " . $_value2 . "\n\n");
echo nl2br("Expected output: " . sprintf("%1.2f", $_value1+$_value2) . "\n\n");

echo nl2br("\n\n9. Write a PHP script to generate simple random password [do not use rand() function]
 from a given string. \n\n");
$_password = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
echo nl2br("Sample string: " . $_password . "\n\n");
echo nl2br("Expected output: " . substr(str_shuffle($_password), 0, 7) . "\n\n");

echo nl2br("\n\n10. Write a PHP script to replace the first 'the' of the following string whit 'That'.\n\n");
$_string = "the quick brown fox jumps over the lazy dog.";
echo nl2br("Sample string: " . $_string . "\n\n");
$_alteredString = preg_replace("/the/", "That", $_string, true);
echo nl2br("Expected output: " . $_alteredString . "\n\n");

echo nl2br("\n\n11. Write a PHP script to find the first character that is different between two strings.\n\n");
$_string1 = "football";
$_string2 = "footboll";
echo nl2br("Sample string: string1 = " . $_string1 . ", string2 =  " . $_string2 . "\n\n");
$position = 0;
//$i=0;
//$j=0;
//while($i<strlen($_string1)) {
//    if($_string1[$i] === $_string2[$j]) {
//        $position = $i;
//        $i++;
//        $j++;
//    }
//    else break;
//}
$position = strspn($_string1 ^ $_string2, "\0");
//echo nl2br("Expected output: first difference between two strings at position " . ($position+1) . ": "
//     . $_string1[$position+1] . " vs " . $_string2[$position+1] . "\n\n");
echo nl2br("Expected output: first difference between two strings at position " . ($position) . ": "
    . $_string1[$position] . " vs " . $_string2[$position] . "\n\n");

echo nl2br("\n\n12. Write a PHP script to get the filename component of the following path.\n\n");
$_string = "http://www.w3resource.com/index.php";
echo nl2br("Sample string: " . $_string . "\n\n");
$_afterSlash = substr($_string, strrpos($_string, "/")+1);
$_pos = strrpos($_afterSlash, ".");
echo nl2br("Expected output: " . substr($_afterSlash,0, $_pos) . "\n\n");

echo nl2br("\n\n13. Write a PHP script to print the next character of a specific character.\n\n");
$_character = 'a';
echo nl2br("Sample character: " . $_character . "\n\n");
$_hexChar = bin2hex($_character);
$_hexChar++;
echo nl2br("Expected output: " . hex2bin($_hexChar) . "\n\n");
$_character = 'z';
$_hexChar = bin2hex($_character);
if($_character === 'z') $_hexChar = 61;
echo nl2br("Sample character: " . $_character . "\n\n");
echo nl2br("Expected output: " . hex2bin($_hexChar) . "\n\n");

echo nl2br("\n\n14. Write a PHP script to remove a part of a string from the beginning. \n\n");
echo nl2br("Sample string: " . $_email . "\n\n");
echo nl2br("Expected output: " . substr(strstr($_email, "@"), 1) . "\n\n");

echo nl2br("\n\n15. Write a PHP script to get a hex dump pf a string.\n\n");
echo nl2br("Sample string: " . $_email . "\n\n");
echo nl2br("Expected output: " .  bin2hex($_email) . "\n\n");

echo nl2br("\n\n16. Write a PHP script to insert at the specified position in a given string.\n\n");
$_string = "The brown fox";
echo nl2br("Original string: " . $_string . "\n\n");
echo nl2br("Insert 'quick' between 'The' and 'brown'." . "\n\n");
$_pos = strpos($_string, " ");
echo nl2br("Expected output: " .  substr_replace($_string, " quick ", $_pos, 0) . "\n\n");

echo nl2br("\n\n17. Write a PHP script to get the first word of a sentence.\n\n");
$_string = "The quick brown fox";
echo nl2br("Original string: " . $_string . "\n\n");
echo nl2br("Expected output: " .  strtok($_string, " ") . "\n\n");

echo nl2br("\n\n18. Write a PHP script to remove all leading zeros from a string.\n\n");
$_string = "000547023.24";
echo nl2br("Original string: " . $_string . "\n\n");
echo nl2br("Expected output: " .  ltrim($_string, "0") . "\n\n");

echo nl2br("\n\n19. Write a PHP script to remove part of a string.\n\n");
$_string = "The quick brown fox jumps over the lazy dog";
echo nl2br("Original string: " . $_string . "\n\n");
echo nl2br("Remove 'fox' from the above string.\n\n");
echo nl2br("Expected output: " . str_replace("fox","", $_string) . "\n\n");

echo nl2br("\n\n20. Write a PHP script to remove trailing slash from a string.\n\n");
$_string = "The quick brown fox jumps over the lazy dog///";
echo nl2br("Original string: " . $_string . "\n\n");
echo nl2br("Expected output: " . rtrim($_string, "/") . "\n\n");

echo nl2br("\n\n21. Write a PHP script to get the characters after the last '/' in an url.\n\n");
$_string = "http://www.w3resource.com/12345";
echo nl2br("Original string: " . $_string . "\n\n");
echo nl2br("Expected output: " . substr($_string, strrpos($_string, "/")+1) . "\n\n");

echo nl2br("\n\n22. Write a PHP script to replace multiple characters from the following string.\n\n");
$_string = '\"1+2/3*2:2-3/4*3';
$_charsOut = '/\+:-"*';
echo nl2br("Sample string: " . $_string . "\n\n");
echo nl2br("Expected output: " . str_replace(str_split($_charsOut), " ", $_string) . "\n\n");

echo nl2br("\n\n23. Write a PHP script to select first 5 words from the following string.\n\n");
$_string = "The quick brown fox jumps over the lazy dog///";
echo nl2br("Original string: " . $_string . "\n\n");
echo nl2br("Expected output: " . implode(' ', array_slice(explode(' ', $_string), 0, 5)) . "\n\n");

echo nl2br("\n\n24. Write a PHP script to remove comma(s) from the following numeric string.\n\n");
$_string = '2,543.12';
echo nl2br("Sample string: " . $_string . "\n\n");
echo nl2br("Expected output: " . str_replace(",", "", $_string) . "\n\n");

echo nl2br("\n\n25. Write a PHP script to print letters from 'a' to 'z'.\n\n");
$_string = "";
for($i=ord('a'); $i <= ord('z'); $i++) {
    $_string .= chr($i);
}
echo nl2br("Expected output: " . $_string . "\n\n");

// exercise 26 -> will return Aop;
