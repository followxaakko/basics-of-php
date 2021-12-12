<?php
    $marks = 20;

    /* if ($marks > 74.5) {
        echo "Grade A";
    } else if ($marks > 64.5) {
        echo "Grade B";
    } else if ($marks > 50) {
        echo "Grade C";
    } else {
        echo "You've failed!";
    } */

    switch ($marks) {
        case ($marks > 74.5):
            echo "Grade A";
            break;
        case ($marks > 64.5):
            echo "Grade B";
            break;
        case ($marks > 50):
            echo "Grade C";
            break;
        Default:
            echo "You've failed";
            break;
    }