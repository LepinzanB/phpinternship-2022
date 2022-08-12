<?php
echo nl2br("1. Write a PHP script to : - \n");
echo "a) ".nl2br(strtoupper("transform a string all uppercase letters.\n"));
echo "b) ".nl2br(strtolower("transform a string all lowercase letters.\n"));
echo "c) ".nl2br(ucfirst("make a string's first character uppercase.\n"));
echo "d) ".nl2br(ucwords("transform a string all uppercase letters.\n"));

#2
echo nl2br("\n2. Write a PHP script to split the following string.\n");
$string2 = "082307";
$var = substr_replace($string2,":",2,0);
echo substr_replace($var,":",5,0);
#3
echo nl2br("\n\n3. Write a PHP script to check if a string contains specific string?\n");
$string3 = "The quick brown fox jumps over the lazy dog.\n";
echo nl2br($string3);
echo strpos($string3, "jumps");
#4
echo nl2br("\n4. Write a PHP script to convert the value of a PHP variable to string.\n");
$phpval = 234;
echo nl2br("intVal: ".$phpval."\n");
echo nl2br("strVal: ".(string) $phpval."\n");
#5
echo nl2br("\n5.Write a PHP script to extract the file name from the following string.\n");
$string5 = "www.example.com/public_html/index.php";
echo substr($string5, strripos($string5,"/")+1);

#6
echo nl2br("\n\n6. Write a PHP script to extract the user name from the following email ID.\n");
$string6 ="rayy@example.com";
echo substr($string6, 0, strpos($string6, "@") );
#7
echo nl2br("\n\n7. Write a PHP script to get the last three characters of a string.\n");
echo substr($string6,strlen($string6)-3);
#8
echo nl2br("\n\n8. Write a PHP script to format values in currency style.\n");
$value1 = 65.45;
$value2 = 104.35;
echo number_format((float)($value1+$value2),2);
#9
echo nl2br("\n\n9. Write a PHP script to generate simple random password [do not use rand() function] from a given 
string.\n");
$passKey =  "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
$passLen = 8;
echo substr(str_shuffle($passKey) ,0,$passLen);
#10
echo nl2br("\n\n10. Write a PHP script to replace the first 'the' of the following string with 'That'.\n");
$string10 = "the quick brown fox jumps over the lazy dog.";
echo preg_replace("/the/","That", $string10,1);
#11
echo nl2br("\n\n11. Write a PHP script to find first character that is different between two strings.\n");
$StringExampl1 = 'football';
$StringExampl2 = 'footboll';
$str_dif_pos = strspn($StringExampl1 ^ $StringExampl2,"\0");
echo $str_dif_pos.":"." '".$StringExampl1[$str_dif_pos]."' VS '".$StringExampl2[$str_dif_pos]."' ";
#12
echo nl2br("\n\n12. Write a PHP script to get the filename component of the following path.\n");
$string12 = "http://www.w3resource.com/index.php";
echo strchr(substr($string5, strripos($string5,"/")+1),".",-1);
#13
echo nl2br("\n\n13. Write a PHP script to print the next character of a specific character.\n");
$Sch = "a";
$nextCh = ++$Sch;
if (strlen($nextCh)>1){
    echo $nextCh[0];
}
else{
    echo $nextCh;
}
#14
echo nl2br("\n\n14. Write a PHP script to remove a part of a string from the beginning.\n");
$string14 = 'rayy@example.com';
echo substr($string14, strpos($string14,"@")+1);
#15
echo nl2br("\n\n15. Write a PHP script to get a hex dump of a string.\n");
$str = "rayy@example.com";
echo bin2hex($str);
#16
echo nl2br("\n\n16. Write a PHP script to insert a string at the specified position in a given string.\n");
$string16 = "The brown fox";
echo substr_replace($string16,"quick ",strrpos($string16,"brown"),0);