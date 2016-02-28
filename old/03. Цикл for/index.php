<?php

// BEGIN (write your solution here)
function sumWith($number, $finish, $func) {
    $sum = 0;
    for ($i = $number; $i <= $finish; $i++) {
     	$sum = $sum + $func($i);
    }

    return $sum;
}
// END
