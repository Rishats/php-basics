<?php

// BEGIN (write your solution here)
function fib($num)
{
    $fibSum = 0;
    $fib1 = 0;
    $fib2 = 1;

    $i = 0;

    while($i < $num) {
        $fib1 = $fib2;
        $fib2 = $fibSum;
        $fibSum = $fib1 + $fib2;
        $i++;
    }

    return $fibSum;
}

// END
