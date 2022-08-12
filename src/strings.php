<?php
    function pretty($str, $rez): void
    {
        echo " <h3>",$str,"<h3>","\n";
        echo "<p class='result'>",$rez,"</p>";
    }
    //ex1a
    $string = "dummy dummy";
    $string = strtoupper($string);
    pretty("1a)Write a PHP script to  transform a string all uppercase letters:",$string);
    //ex1b
    $string = strtolower($string);
    pretty("1b)Write a PHP script to transform a string all lowercase letters:",$string);
    //ex1c
    $string = ucfirst($string);
    pretty("1c)Write a PHP script to make a string's first character uppercase:",$string);
    //ex1d
    $string = ucwords($string);
    pretty("1d)Write a PHP script to make a string's first character uppercase:",$string);
    //ex2
    $arr = [];
    $i = 0;
    while(strlen($string) > 1){
        $arr[$i++] = $string[0] . $string[1];
        $string = substr($string, 2);
    }
    $arr[$i] = $string;
    $string = implode(":", $arr);
    //v2 $string = substr_replace($string,":",2,0);
    pretty("2)Write a PHP script to split the string:",$string);
    //ex3
    $string = "dummy dummy";
    $find = "duma";
    pretty("3)Write a PHP script to check if a string contains specific string:",$string.!empty(strstr($string, $find, 0)) ? " has " : " has not ".$find);
    //ex4
    $find = 1.2343;
    $string = strval($find);
    pretty("4)Write a PHP script to convert the value of a PHP variable to string:",$string);
    //ex5
    $string = "https://www.example.com/public_html/index.php";
    pretty("5)Write a PHP script to extract the file name from the following string:",substr(strrchr($string,"/"),1));
    //ex6
    $string = 'rayy@example.com';
    pretty("6)Write a PHP script to extract the user name from the following email ID:",strstr($string,"@",true));
    //ex7
    pretty("7)Write a PHP script to get the last three characters of a string:",substr($string,strlen($string) - 3));
    //ex8
    $val1 = 123.5;
    $val2= 243.63;
    pretty("8)Write a PHP script to format values in currency style:",number_format($val1 + $val2,2));
    //9
    $string = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    $string = str_split($string);
    shuffle($string);
    $string = implode($string);
    pretty("9)Write a PHP script to generate simple random password from a given string:",substr($string,7, 8));
    //10
    $dummy = 0;
    $string = "the quick brown fox jumps over the lazy dog";
    $pos = strpos($string, "the");
    $pos !== false ? $string = substr_replace($string,"That",$pos,3) : $dummy ++;
    pretty("10)Write a PHP script to replace the first 'the' of the following string with 'That':",$string);
    //11
    $s1 = "football";
    $s2 = "footboll";
    $i = 0;
    while(strlen($s1) > $i && strlen($s2) > $i){
        if($s1[$i] !== $s2[$i])
            break;
        $i++;
    }
    pretty("11)Write a PHP script to find first character that is different between two strings:",$s1[$i]." different from ".$s2[$i] );
    //12
    $string = "https://www.w3resource.com/index.php";
    $rez = strstr(substr(strrchr($string,"/"),1), ".", true);
    pretty("12)Write a PHP script to get the filename component of the following path:",$rez);
    //13
    $string = 'a';
    $string = $string[0] == 'z' ? ord('a') : ord($string[0]) + 1;
    $string = chr($string);
    pretty("13)Write a PHP script to print the next character of a specific character:",$string);
    //14
    $string = 'some text without meaning';
    $string = substr($string,6);
    pretty("14)Write a PHP script to remove a part of a string from the beginning:",$string);
    //15
    $string = 'some text without meaning';
    $string = bin2hex($string);
    pretty("15)Write a PHP script to get a hex dump of a string:",$string);
    //16 it works :)
    $string = "The brown fox";
    $string = substr_replace($string," quick ",4,0);
    pretty("16)Write a PHP script to insert a string at the specified position in a given string:",$string);
    //17
    $string = strstr($string," ", true);
    pretty("17)Write a PHP script to get the first word of a sentence:",$string);
    //18
    $string = "00sds00";
    $string = ltrim($string,"0");
    pretty("18)Write a PHP script to remove all leading zeroes from a string:",$string);
    //19
    $string = "The quick brown fox jumps over fox the lazy dog";
    $count = 1;
    $string = substr_replace($string,"", 16, 3);
    pretty("19)Write a PHP script to remove part of a string:",$string);
    //20
    $string = "00sds00///";
    $string = rtrim($string,"/");
    pretty("20)Write a PHP script to remove trailing slash from a string:",$string);
    //21
    $string = "https://www.example.com/5478631";
    $string = substr(strrchr($string,"/"),1);
    pretty("21)Write a PHP script to get the characters after the last '/' in an url:",$string);
    //22
    $string = "'1+2/3*2:2-3/4*3";
    $string = str_replace([':', '\\', '/', '*', '+', '\'', '-'], ' ', $string);
    pretty("22)Write a PHP script to replace multiple characters from the following string:",$string);
    //23
    $string = "The quick brown fox jumps over fox the lazy dog";
    $string = implode(' ', array_slice(explode(' ', $string), 0, 5));
    pretty("23)Write a PHP script to select first 5 words from the following string:",$string);
    //24
    $string = "as,adsa,sa,dsf,s";
    $string = str_replace(",", "", $string);
    pretty("24)Write a PHP script to remove comma(s) from the following numeric string",$string);
    //25 cheating
    pretty("25)Write a PHP script to print letters from 'a' to 'z':","abcdefghijklmnopqrstuvwxyz");
    //26 se face increment la codul in hexadecimal al string-ului
    $d = 'Aoo';
    echo ++$d;