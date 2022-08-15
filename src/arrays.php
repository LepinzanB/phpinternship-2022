<?php
    function pretty($str, $rez): void
    {
        if($str !== "")
            echo " <h3>",$str,"</h3>","\n";
        if($rez !== "")
            echo "<p class='result'>",$rez,"</p>";
    }
    function handleJsonArray($arr){
        foreach($arr as $key =>$val){
            if(is_array($val))
                handleJsonArray($val);
            else
                pretty("",$key.":".$val);
        }
    }
    //ex1
    $color = ['white', 'green', 'red', 'blue', 'black'];
    $rez = "The memory of that scene for me is like a frame of film forever frozen at that moment:";
    $rez .= "the ".$color[2]." carpet, ";
    $rez .= "the ".$color[1]." lawn, ";
    $rez .= "the ".$color[0]." house, ";
    $rez .= "the leaden sky. The new president and his first lady. - Richard M.Nixon";
    pretty("1)Write a script which will display the following string", $rez);
    //ex2
    $color = ['white', 'green', 'red'];
    $rez = implode(",",$color);
    pretty("2)Write a PHP script which will display the colors in the following way :", $rez.",");
    pretty("","\n");
    $index = [1,2,0];
    foreach($index as $val){
        pretty("",$color[$val]);
    }
    //ex3
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
        "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
        "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
        Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
        "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    $ceu = array_flip($ceu);
    asort($ceu);
    $ceu = array_flip($ceu);
    pretty("3)Create a PHP script which display the capital and country name from the above array \$ceu. Sort the list
                by the name of the country:", "");
    foreach($ceu as $key => $val){
        $rez = "The Capital of ". $key. " is ".$val;
        pretty("",$rez);
    }
    //ex4
    $x = array(1, 2, 3, 4, 5);
    unset($x[3]);
    $x = array_values($x);
    $rez = "";
    foreach($x as $key => $val){
        $rez .= $key. " => ".$val. " ";
    }
    pretty("4)Delete an element from the above PHP array. After deleting the element, integer keys must benormalized", $rez);
    //ex5
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    $rez = $color[array_key_first($color)];
    pretty("5)Write a PHP script to get the first element of the above array", $rez);
    //ex6
    $json = "{\"Title\": \"The Cuckoos Calling\",
            \"Author\": \"Robert Galbraith\",
            \"Detail\": {
            \"Publisher\": \"Little Brown\"
            }}";
    $array = json_decode($json, true);
    pretty("6)Write a PHP script which decode the following JSON string.","");
    handleJsonArray($array);
    //ex7
    function insertAt($arr, $pos, $val){
        $aux = [];
        while($pos > 0){
            if($arr)
            $aux[] = array_shift($arr);
            $pos --;
        }
        array_unshift($arr,$val);
        return array_merge($aux, $arr);
    }
    $array = [1, 2, 3, 4, 5];
    $array = insertAt($array,3,"$");
    pretty("7)Write a PHP script that insert a new item in an array on any position",implode(",", $array));
    //8
    $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
    pretty("8)Write a PHP script that insert a new item in an array on any position","");
    asort($array);
    pretty("a)ascending order sort by value",implode(",", $array));
    ksort($array);
    pretty("b) ascending order sort by Key",implode(",", array_keys($array)));
    arsort($array);
    pretty("c)descending order sort by value",implode(",", $array));
    krsort($array);
    pretty("d) descending order sort by Key",implode(",", array_keys($array)));
    //9
    $array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
        62, 62, 65, 64, 68, 73, 75, 79, 73];
    function avg($array){
        $sum = 0;
        foreach($array as $value){
            $sum += $value;
        }
        return $sum/count($array);
    }
    pretty("9)Write a PHP script to calculate and display average temperature, five lowest and highest temperatures:",avg($array));
    sort($array);
    pretty("",implode(",",array_slice($array,0,5)));
    pretty("",implode(",",array_slice($array,-5,5)));
    //10
    function my_sum($arr, $i){
        $sum = 0;
        foreach ($arr as $val){
            $sum += $val > $i;
        }
        return $sum;
    }
    function beadSort($arr){
        $step = 0;
        $rez = [];
        $rez = array_fill(0,max($arr),0);
        foreach($arr as $val) {
            for($j = 0; $j < $val; $j ++)
                $rez[$j]++;
        }
        echo implode(",", $rez);
        $len = count($arr);
        $ret = [];
        for($i = 0; $i < $len; $i ++){
            $ret[] = my_sum($rez,$i);
        }
        return $ret;

    }
    $array = [5,3,1,3,12,7,4,1,1,3];
    $rez = beadSort($array);
    pretty("10)Write a PHP program to sort an array of positive integers using the Bead Sort Algorithm:",implode(",", $rez));
    //11 din ce am inteles, trebuie facut un fel de merge unde arr1[i],arr2[i] and so on, iar daca arr1.len > arr2.len se continua cu arr1
    $arr1 = array(array(77, 87), array(23, 45));
    $arr2 = array("w3resource", "com");
    $len1 = count($arr1);
    $len2 = count($arr2);
    $i = 0;
    $j = 0;
    $rez = [];
    while($i < $len1 && $j < $len2){
        $rez[] = $arr1[$i];
        $rez[] = $arr2[$i];
        $i++;
        $j++;
    }
    while($i < $len1)
    {
        $rez[] = $arr1[$i];
        $i++;
    }
    while($j < $len2)
    {
        $rez[] = $arr2[$j];
        $j++;
    }
    pretty("11)Write a PHP program to merge (by index) the following two arrays:",implode(",", $rez));
    //12
    $color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    $color = array_map('strtoupper',$color);
    pretty("12)Write a PHP function to change the following array's all values to upper or lower case:","");
    $rez = implode(",", $color);
    pretty("","a)To upper: ".$rez);
    $color = array_map('strtolower',$color);
    $rez = implode(",", $color);
    pretty("","a)To lower: ".$rez);
    //13 I guess a for is not a control statement, right?
    $arr = [];
    for($i = 200; $i < 250; $i+=4 ){
        $arr[] = $i;
    }
    $rez = implode(",", $arr);
    pretty("13)Write a PHP script which display all the numbers between 200 and 250 that are divisible by 4:",$rez);
    //14
    function compLenght($s1, $s2){
        $len1 = strlen($s1) ;
        $len2 = strlen($s2) ;
        if($len1 > $len2)
            return 1;
        elseif($len1 === $len2)
            return 0;
        else return 1;
    }
    $arr =  ["abcd","abc","de","hjjj","g","wer"];
    usort($arr,'compLenght');
    $rez = "The shortest string has length ".strlen($arr[0]).
        ". The longest string has length ".strlen($arr[count($arr)-1]);
    pretty("14)Write a PHP script to get the shortest/longest string length from an array:",$rez);
    //15 am incercat cu array_rand(arr.len) dar cheile nu erau deloc random
    $rez = [];
    $arr = range(11,20);
    while(count($arr) > 0){
        $key = array_rand($arr,1);
        $rez[] = $arr[$key];
        unset($arr[$key]);
        $array = array_values($arr);
    }
    $rez = implode(",", $rez);
    pretty("15)Write a PHP script to generate unique random numbers within a range:",$rez);
    //16
    $arr = array(4 => 'white', 6 => 'green', 11=> 'red');
    $keys = array_keys($arr);
    $rez = count($keys) > 0 ? max($keys) : "array is empty";
    pretty("16)Write a PHP script to get the largest key in an array:",$rez);
    //17
    function min_not_zero($arr){
        return min(array_diff($arr, array(0)));
    }
    $arr = [1,0,0,0,0,0,23,241,2131];
    pretty("17)Write a PHP function that returns the lowest integer that is not 0:",min_not_zero($arr));
    //18
    function floor_values($val, $precision, $separator){
        return number_format($val,$precision,$separator," ");
    }
    $arr = [1.14314, 423.1414, 4414.422];
    $rez = [];
    foreach($arr as $val){
        $rez[] = floor_values($val,2,',');
    }
    $rez = implode(" ; ", $rez);
    pretty("18)Write a PHP function to floor decimal numbers with precision:",$rez);
    //19
    $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
        "holes" => array ( "First", 5 => "Second", "Third"));
    $rez = "";
    $rez.= $color["holes"][5];
    $rez .= " ";
    $rez.= $color["color"]["a"];
    pretty("19)Write a PHP script to print 'second' and Red from the following array:",$rez);
    //20
    function comp_by_priority($a, $b){
        global $priority_arr;
        $a_key = array_search($a,$priority_arr);
        $b_key = array_search($b,$priority_arr);
        if($a_key > $b_key)
            return 1;
        elseif ($a_key == $b_key)
            return 0;
        else
            return -1;
    }
    function sort_by_priority(&$arr){
        uasort($arr,'comp_by_priority');
    }
    $priority_arr = [1,3,4,2];
    $array = [1,2,4,2,1,4,3,2,2];
    sort_by_priority($array);
    $rez = implode(",", $array);
    pretty("20)Write a PHP function to sort an array according to another array acting as a priority list:",$rez);
    //21
    function comp_subnets($adr1, $adr2){
        $a1 = explode('.',$adr1);
        $a2 = explode('.',$adr2);
        for($i = 0; $i < 3; $i ++){
            if($a1[$i] < $a2[$i]){
                return -1;
            }
            if($a2[$i] < $a1[$i]){
                return 1;
            }
        }
        return 0;
    }
    $list = ['167.169.12', '167.167.11', '167.169.14',
        '167.168.13', '167.167.12', '167.169.15', '167.167.16'];
    usort($list,'comp_subnets');
    $rez = implode(' , ',$list);
    pretty("21) Write a PHP function to sort subnets:", $rez);
    //22
    function comp_by_id_or_user($x, $y){
        if($x["id"] > $y["id"]){
            return 1;
        }
        elseif($x["id"] < $y["id"])
            return -1;
        elseif($x["username"] < $y["username"])
            return -1;
        else return 1;
    }
    $list = [];
    $list[0]["id"] = 111;
    $list[1]["id"] = 111;
    $list[2]["id"] = 113;
    $list[0]["username"] = "dummy";
    $list[1]["username"] = "dummies";
    $list[2]["username"] = "dummies";
    usort($list,'comp_by_id_or_user');
    $rez = implode(' , ',$list[0])." ";
    $rez .= implode(' , ',$list[1])." ";
    $rez .= implode(' , ',$list[2]);
    pretty("22) Write a PHP script to sort the following array by the day (page_id) and user name:", $rez);
    //23
    function comp_by_column($x, $y){
        global $col;
        return $x[$col] > $y[$col] ? 1 : -1;
    }
    $col = "id";
    usort($list,'comp_by_column');
    //output here is tricky, I won't print anything for now
    //24
    function comp_case_insensitive($x, $y){
        return strtolower($x) > strtolower($y) ? 1 : -1;
    }
    $arr = ['as', 'As', 'ASUS', 'asuss', 'ASASAsa'];
    usort($arr,'comp_case_insensitive');
    $rez = implode(' , ',$arr);
    pretty("24) Write a PHP script to sort an array using case-insensitive natural ordering:", $rez);
    //37. Write a PHP script to count the total number of times a specific value appears in an array
    function count_val($arr, $val){
        $k = 0;
        foreach($arr as $el){
            if($el === $val)
                $k ++;
        }
        return $k;
    }
    //59
    eval("echo 4*5;");

