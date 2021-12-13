<?php
    /*
      //Loops
            //Types of loops = 3
                //for
                //foreach
                //while
        //while loop
        while($i < count($marks)) {
            echo getGrades($marks[$i]);
            echo "<br>";
            $i++;
        //forloop
        for($i = 0; $i < count($marks); $i++) {
            echo getGrades($marks[$i]);
            echo "<br>";
        }
        //foreach
        foreach($marks as $name => $mark) {
            echo getGrades($mark, $name);
            echo "<br>";
        }
        }
        //do while loop
        do {
            echo getGrades($marks[$i]);
            echo "<br>";
            $i++;
        } while($i < count($marks));
        /////
        //Excersise using functions
        $marks = [
                    "Ahmed" =>  [
                                    "Chemistry" => 75,
                                    "English" => 80,
                                ],
                    "Jailam" => [
                                    "Islam" => 80,
                                    "Maths" => 60,
                                ],
                    "Zayan" =>  [
                                    "Dhivehi" => 40,
                                    "Maths" => 55,
                                ]
                ];
        foreach($marks as $student => $subjects) {

            foreach($subjects as $subject => $mark) {
                echo getGrades($mark, $student) . " in $subject";
                echo "<br>";
            }

        }
        function getGrades ($marks = 0, $name = "Zayan")
        {
            if ($marks > 74.5) {
                return "$name got Grade A";
            } else if ($marks > 64.5) {
                return "$name got Grade B";
            } else if ($marks > 50) {
                return "Grade C";
            } else {
                return "$name has failed!";
            }
        }
    */