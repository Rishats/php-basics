<?php

namespace App\Solution;

// BEGIN (write your solution here)
function moveZeroes(array $arr)
{
    $result = [];
    $zeroes = 0;

    for($i = 0; $i < sizeOf($arr); $i++) {
        if ($arr[$i] != 0) {
            $result[] = $arr[$i];
        } else {
            $zeroes++;
        }
    }
    for($i = 0; $i < $zeroes; $i++) {
        $result[] = 0;
    }

    return $result;
}
// END
