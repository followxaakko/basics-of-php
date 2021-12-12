<?php

    $marks = 80;
        //if conditions
    /* if ($marks > 74.5) {
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
        //Ternary Operator
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
