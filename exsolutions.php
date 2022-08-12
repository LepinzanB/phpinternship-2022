<?php
function ex1() {
    $stringToBeTransformed = "Ana are mere!";
    echo strtoupper($stringToBeTransformed);
    echo "<br>";
    echo strtolower($stringToBeTransformed);
    echo "<br>";
    echo ucfirst($stringToBeTransformed);
    echo "<br>";
    echo ucwords($stringToBeTransformed);
    echo "<br>";
}

function ex2() {
    $stringToBeSplit = "082307";
    $stringToBeOutput = "";
    $stringToBeOutput = substr_replace($stringToBeSplit,":",2,0);
    echo substr_replace($stringToBeOutput,":",5,0)."\n";
}

function ex3() {
    $stringToBeChecked = "The quick brown fox jumps over the lazy dog.";
    $found = strstr($stringToBeChecked, "jumps");
    if($found != false) {
        echo "Found";
        echo "<br>";
    }
    else {
        echo "Not found";
        echo "<br>";
    }
}

function ex4() {
    $varToBeConverted = 34.67;
    echo strval($varToBeConverted);
}

function ex5() {
    $stringToBeExtractedFrom = "www.example.com/public_html/index.php";
    $extractedString = substr(strrchr($stringToBeExtractedFrom, "/"), 1);
    echo $extractedString;
    echo "<br>";
}

function ex6() {
    $email = "rayy@example.com";
    $username = strstr($email, "@", true);
    echo $username;
    echo "<br>";
}

function ex7() {
    $email = "rayy@example.com";
    $last3characters = substr($email, -3);
    echo $last3characters;
    echo "<br>";
}

function ex8() {
    $value1 = 65.45;
    $value2 = 104.35;
    $result = $value1 + $value2;
    echo sprintf("%1.2f", $result);
    echo "<br>";
}

function ex9() {
    $sapmpleString = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    $password = substr(str_shuffle($sapmpleString), 0, 8);
    echo $password;
    echo "<br>";
}

function ex10() {
    $stringToBeTransformed = "the quick brown fox jumps over the lazy dog.";
    $beginning = strstr($stringToBeTransformed, "the", true);
    $end = substr(strstr($stringToBeTransformed, "the"), 3);
    $that = "That";
    $transformedString = $beginning .= $that .= $end;
    echo $transformedString;
    echo "<br>";
}

function ex11() {
    $string1 = "football";
    $string2 = "footboll";
    for($i = 0; $i < strlen($string1); $i++) {
        if($string1[$i] !== $string2[$i])
        {
            echo "First difference between two strings at position " .$i ." \"" .$string1[$i] ."\" vs \"" .$string2[$i] ."\"";
        }
    }
    echo "<br>";
}

function ex12() {
    $path = "http://www.w3resource.com/index.php";
    $filename = strstr(substr(strrchr($path, "/"), 1), ".", true);
    echo $filename;
    echo "<br>";
}

function ex13() {
    $inputCharacter = 'z';
    $outputCharacter = $inputCharacter++;
    echo $outputCharacter." ".$inputCharacter;
}

function ex14() {
    $inputString = "rayy@example.com";
    $inputString = substr(strchr($inputString, "@"), 1);
    echo $inputString;
    echo "<br>";
}

/*function ex15() {
    $inputString
}*/

function ex16() {
    $originalString = "The brown fox";
    $insertedString ="quick";
    $outputString = substr_replace($originalString, $insertedString.' ', 4, 0);
    echo $outputString;
    echo "<br>";
}

function ex17() {
    $sentence = "The quick brown fox";
    $firstWord = strtok($sentence, " ");
    echo $firstWord;
    echo "<br>";
}

function ex18() {
    $originalString = "000547023.24";
    $outputString = trim($originalString, "0");
    echo $outputString;
    echo "<br>";
}

function ex19() {
    $originalString = "The quick brown fox jumps over the lazy dog";
    $stringToBeRemoved = "fox";
    $outputString = str_replace($stringToBeRemoved, "", $originalString);
    echo $outputString;
    echo "<br>";
}

function ex20() {
    $originalString = "The quick brown fox jumps over the lazy dog///";
    $outputString = trim($originalString, "/");
    echo $outputString;
    echo "<br>";
}

function ex21() {
    $stringToBeExtractedFrom = "http://www.example.com/5478631";
    $extractedString = substr(strrchr($stringToBeExtractedFrom, "/"), 1);
    echo $extractedString;
    echo "<br>";
}

function ex22() {

}