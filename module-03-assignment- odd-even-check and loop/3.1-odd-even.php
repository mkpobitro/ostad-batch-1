<?php

function evenOddCheck($number) {
    if ($number % 2 == 0) {
        return "$number is an Even Number";
    } else {
        return "$number is an Odd Number";

    }
}

echo evenOddCheck(14);