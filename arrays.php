<?php
    function iWantABeautifulJson($the_json_array){
        foreach($the_json_array as $key => $val){
            if(is_array($val))
                iWantABeautifulJson($val);
            else
                echo nl2br($key. ": " .$val ."\n");
        }
    }

    echo nl2br("1)Write a script which will display the following string\n");
        $the_colours  = ['white', 'green', 'red', 'blue', 'black'];
        $the_following = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$the_colours[2]}"
                . "carpet, the {$the_colours[1]} lawn, the {$the_colours[0]} house, the leaden sky. The new president and his "
                . "first lady. - Richard M. Nixon";
        echo nl2br($the_following . "\n");
        echo nl2br("\n");
    echo nl2br("2)Write a PHP script which will display the colors in the following way:\n");
        $the_other_colours = ['white', 'green', 'red'];
        foreach ($the_other_colours as $the_colour){
            echo  $the_colour.",";
        }
        echo nl2br("\n\n");

        sort($the_other_colours);
        foreach ($the_other_colours as $the_colour){
            echo  nl2br($the_colour . "\n");
        }
        echo nl2br("\n");

    echo nl2br("3)Create a PHP script which display the capital and country name from the above array \$ceu."
                ."Sort the list by the name of the country:" . "\n");
        $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
                "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
                "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
                "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
                "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
                "Estonia"=>"Tallinn", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
                "Poland"=>"Warsaw");
        ksort($ceu);
        foreach ($ceu as $key => $value){
            echo nl2br("The capital of ".$key." is ".$value . "\n");
        }
        echo nl2br("\n");

    echo nl2br("4)Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.\n");
        $x = array(1, 2, 3, 4, 5);
        unset($x[1]);
        $x = array_values($x);
        $the_renewed = "";
        foreach($x as $key => $val){
            $the_renewed .= $key. " => ".$val. ", ";
        }
        echo nl2br($the_renewed . "\n");
        echo nl2br("\n");

    echo nl2br("5)Write a PHP script to get the first element of the above array:\n");
        $color = array(4 => 'white', 6 => 'green', 11=> 'red');
        $the_first_one = $color[array_key_first($color)];
        echo nl2br($the_first_one . "\n");
        echo nl2br("\n");

    echo nl2br("6)Write a PHP script which decode the following JSON string.\n");
        $the_json = "{\"Title\": \"The Cuckoos Calling\",
                    \"Author\": \"Robert Galbraith\",
                    \"Detail\": {
                    \"Publisher\": \"Little Brown\"
                    }}";
        $the_decode = json_decode($the_json, true);
        iWantABeautifulJson($the_decode);
        echo nl2br("\n");

    echo nl2br("7)Write a PHP script that insert a new item in an array on any position.\n");
        $to_be_inserted = [1,2,3,4,5];
        array_splice($to_be_inserted, 3,0,"$");
        foreach ($to_be_inserted as $val){
            echo $val." ";
        }
        echo nl2br("\n\n");

    echo nl2br("8) a.Write a PHP script to sort the following associative array ascending order sort by Value:\n");
        $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
        asort($array);
        iWantABeautifulJson($array);
        echo nl2br("\n");

    echo nl2br("8) b.Write a PHP script to sort the following associative array ascending order sort by Key:\n");
        ksort($array);
        iWantABeautifulJson($array);
        echo nl2br("\n");


    echo nl2br("8) c.Write a PHP script to sort the following associative array descending order sort by Value:\n");
        arsort($array);
        iWantABeautifulJson($array);
        echo nl2br("\n");


    echo nl2br("8) d.Write a PHP script to sort the following associative array descending order sort by Key\n");
        krsort($array);
        iWantABeautifulJson($array);
        echo nl2br("\n");

    echo nl2br("9)Write a PHP script to calculate and display average temperature, five lowest and highest temperatures:");
        $the_temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
            73, 75, 79, 73];
        function avg($array){
            $sum = 0;
            foreach($array as $value){
                $sum += $value;
            }
            return $sum/count($array);
        }
        $sum = 0;
        foreach ($the_temperatures as $grade){
            $sum += $grade;
        }
        $sum /= count($the_temperatures);
        sort($the_temperatures);
        echo nl2br("The average: " . $sum . "\n");
        echo nl2br("The five lowest: " . implode(", ",array_slice($the_temperatures,0,5)) . "\n");
        echo nl2br("The five highest: " . implode(", ",array_slice($the_temperatures,-5,5)) . "\n");
        echo nl2br("\n");

    echo nl2br("10)Write a PHP program to sort an array of positive integers using the Bead Sort Algorithm\n");
        $the_array = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];
        echo nl2br("Cam greut, nu am sa mint\n");
        echo nl2br("\n");

    echo nl2br("11)Write a PHP program to merge (by index) the following two arrays:\n");
        $the_array1 = array(array(77, 87), array(23, 45));
        $the_array2 = array("w3resource", "com");
        foreach ($the_array1 as $the_key => $the_value){
            array_unshift($the_array1[$the_key],$the_value);
        };
        print_r($the_array1);
        echo nl2br("\n\n");

    echo nl2br("12)Write a PHP function to change the following array's all values to upper or lower case.\n");
        $the_colours = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
        $the_colours = array_map('strtolower', $the_colours);
        echo nl2br("Lowe cases: \n");
        iWantABeautifulJson($the_colours);
        $the_colours = array_map('strtoupper',$the_colours);
        echo nl2br("\n");
        echo nl2br("Upper casese: \n");
        iWantABeautifulJson($the_colours);
        echo nl2br("\n");

    echo nl2br("13)Write a PHP script which display all the numbers between 200 and 250 that are divisible by 4:\n");
        for ($i = 200; $i <= 250; $i++) {
            if ($i % 4 === 0) {
                echo $i . ", ";
            }
        }
        echo nl2br("\n\n");

    echo nl2br("14)Write a PHP script to get the shortest/longest string length from an array:\n");
        $the_strings = ["abcd", "abc", "de", "hjjj", "g", "wer"];

        function separateTheBrothers($the_s1, $the_s2): int
        {
            return strlen($the_s2) - strlen($the_s1);
        }
        usort($the_strings,"separateTheBrothers");

        echo nl2br("The shortest array length is of size ". strlen(end($the_strings)) . "\n");
        echo nl2br("The longest array length is of size " .strlen($the_strings[0]) . "\n");
        echo nl2br("\n");

    echo nl2br("15)Write a PHP script to generate unique random numbers within a range.\n");
        $the_unicode = range(11,20);

        shuffle($the_unicode);
        for ($i = 0; $i< 10; $i++)
        {
            echo $the_unicode[$i] . ' ';
        }
        echo nl2br("\n\n");

    echo nl2br("16)Write a PHP script to get the largest key in an array:\n");
        $the_keys = array_keys($the_colours);
        $the_max = max($the_keys);
        echo nl2br($the_max . "\n\n");

    echo nl2br("17)Write a PHP function that returns the lowest integer that is not 0:\n");
        $some_random_array = [0, 0, 2, 0, 5, 0, 1, 1, 2, 0, 0, 2, 4, -1];
        echo nl2br("The lowest: " . min(array_diff($some_random_array, array(0))) . "\n\n");

    echo nl2br("18)Write a PHP function to floor decimal numbers with precision:\n");
        function the_function($val, $precision, $separator) : string{
                return number_format($val,$precision,$separator," ");
            }
        $the_sample_data = [1.155, 100.25781, -2.9636];
        $the_transformation = [];
        $the_1 = the_function($the_sample_data[0], 2, '.');
        $the_2 = the_function($the_sample_data[1], 4, '.');
        $the_3 = the_function($the_sample_data[2], 3, '.');
        array_push($the_transformation, ' ', $the_1, ' ', $the_2, ' ',$the_3);

        echo nl2br(implode($the_transformation) . "\n\n");

    echo nl2br("19)Write a PHP script to print 'second' and Red from the following array:\n");
        $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
            "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
            "holes" => array ( "First", 5 => "Second", "Third"));

        $to_be_printed = strtolower($color["holes"][5]). " " .$color["color"]["a"];
        echo nl2br($to_be_printed . "\n");
        echo nl2br("\n");

    echo nl2br("20)Write a PHP function to sort an array according to another array acting as a priority list:\n");
        echo nl2br("Sortarile acestea m-au cam speriat\n");
        echo nl2br("\n");

    echo nl2br("21)Write a PHP function to sort subnets:\n");
        $some_subnets = ['127.024.1', '169.167.2', '127.024.3', '128.168.13', '127.104.1', '169.169.6', '167.45.7'];
        function compare_the_subnets($the_subnet1, $the_subnet2) : int{
            $the_aux1 = explode('.',$the_subnet1);
            $the_aux2 = explode('.',$the_subnet2);
            for($i = 0; $i < 3; ++$i){
                if($the_aux1[$i] < $the_aux2[$i])
                    return -1;
                else if($the_aux1[$i] > $the_aux2[$i])
                    return 1;
            }
            return 0;
        }

        usort($some_subnets,'compare_the_subnets');
        $to_be_printed = implode(', ',$some_subnets);
        echo nl2br($to_be_printed . "\n\n");

    echo nl2br("28)Write a PHP script to sort an array in reverse order (highest to lowest).\n");
        $to_be_sorted = ["Blue", "Red", "Green", "Yellow", "Red", "Red", "Yellow", "Blue"];
        rsort($to_be_sorted);
        print_r($to_be_sorted);
        echo nl2br("\n\n");

    echo nl2br("32)Write a PHP program to get the extension of a file.\n");
        $the_file = 'a_file.txt';
        $another_file = 'a_file.pdf';
        echo nl2br(pathinfo($the_file, PATHINFO_EXTENSION) . "\n");
        echo nl2br(pathinfo($another_file, PATHINFO_EXTENSION) . "\n");
        echo nl2br("\n");

    echo nl2br("36)Write a PHP script to lower-case and upper-case, all elements in an array.\n");
        $i_want_a_change = ["Blue", "Red", "Green", "Yellow", "Red", "Red", "Yellow", "Blue"];
        $the_change_1 = array_map('strtolower', $i_want_a_change);
        $the_change_2 = array_map('strtoupper', $i_want_a_change);

        echo nl2br("The lower ones: " . "\n");
        echo nl2br(iWantABeautifulJson($the_change_1) . "\n");
        echo nl2br("The upper ones: " . "\n");
        echo nl2br(iWantABeautifulJson($the_change_2) . "\n");

    echo nl2br("37)Write a PHP script to count the total number of times a specific value appears in an array.\n");
        $something_to_count = ["Blue", "Red", "Green", "Yellow", "Red", "Red", "Yellow", "Blue"];
        function countingStars($the_array, $the_search_one) : string{
            $the_count = 0;
            foreach ($the_array as $the_value) {
                if ($the_value === $the_search_one)
                    $the_count++;
            }
            return $the_count;
        }
        echo nl2br("Blue colour appears " . countingStars($something_to_count, "Blue"). " time(s)." . "\n\n");

    echo nl2br("59)Calculati 20! intr-o singura linie de cod. (exlcus 1*2*... :)) )\n");
        eval('echo 4*5;');