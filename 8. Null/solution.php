<?php

namespace App\Solution;

function removeNulls(array $array)
{
    // BEGIN (write your solution here)
    for($i = 0; $i < sizeof($array); $i++) {
        if (is_null($array[$i])) {
            unset($array[$i]);
        }
    }

    return $array;
    // END
}
