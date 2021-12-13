<?php
/*
    //variables
        string - "How are you"
        Integers - whole 256
        Boolean - True / False / 1 / 0
        Float - 25.5 7.14
        Array - [1,2,3]
        Null - 0 False
       */
    /*

    $marks = 80;
        //if conditions
     if ($marks > 74.5) {
        echo "Grade A";
    } else if ($marks > 64.5) {
        echo "Grade B";
    } else if ($marks > 50) {
        echo "Grade C";
    } else {
        echo "You've failed!";
    } */

        // switch statements
    /* switch ($marks) {
        case ($marks > 74.5):
            echo "Grade A";
            break;
        case ($marks > 64.5):
            echo "Grade B";
            break;
        case ($marks > 50):
            echo "Grade C";
            break;
        case ($marks > 45):
            echo "Grade D";
            break;
        Default:
            echo "You've failed";
            break;
    } */

    /*    //Ternary Operator
    $grade = $marks > 74.5 ? 'Grade A' : "You've failed!";
    echo $grade;

           //short form
    echo $marks ?: 'No Marks';
            //long form
    echo $marks ? $marks : 'No Marks';
            //short form : Null coalescing operator
    echo $marks ?? 'No Marks';
            //lomg form : Null coalescing operator
    echo isset($marks) ?: 'No Marks';
    */
    /*

    Conventions
    1. TitleCase - EveryNewWordFirstLetterIsCapital
    2. CamelCase - firstWordFirstLetterIsSimleOthersAreCapital
    3. Snake_Case/Underscore_Case - space_is_replaced_by_underscore_ans_all_letters_are_in_simple_form
    4. Kebab-Case - space-is-replaced-by-dash-ans-all-letters-are-in-simple-form - Used for naming files - cant use for variables
    */
/*
    //Functions
    function printGrades ($marks)
    {
        //$marks = 44;

        if ($marks > 74.5) {
            echo "Grade A";
        } else if ($marks > 64.5) {
            echo "Grade B";
        } else if ($marks > 50) {
            echo "Grade C";
        } else {
            echo "You've failed!";
        }
    }
    printGrades(88);
    echo "<br>";
    printGrades(40);

    function getGrades ($marks = 0, $name = "Zayan")
    {
        //$marks = 44;

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
    $grade = getGrades(90 , "King");
    echo $grade;
    */

    /*
    //Arrays
    //1dimenisonal array
    $marks = [50, 80, 88];
    //2dimenisonal array
    $students = [
                    [Zayan, 50, 60, 80],
                    [Ahmed, 60, 80, 90],
                ]
    //3dimenisonal array
    $students = [
                    [Zayan, 50, 60,
                        ["Chemistry", "Physics"]
                    ],
                    [Ahmed, 60, 80, 90],
                ]
    //Multi Dimensional Array
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
    */
    /*
    //         0   1   2
    //$marks = [50, 80, 88, "Zayan"];
    //give any index - Associative arrays
    $marks = [
                0 =>50,
                1 => 80,
                2 => 88,
                77 => "Zayan",
                "Ahmed" => 7
            ];
    //$marks[5] = 90;
    //$marks[] = 90;
    echo $marks["Ahmed"];
    //var_dump($marks);
    */

    //Loops
        //for
        //foreach
        //while
    //while loop
    /*while($i < count($marks)) {
        echo getGrades($marks[$i]);
        echo "<br>";
        $i++;
    //forloop
    /*
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
?>