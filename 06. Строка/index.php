<?php

error_reporting(E_ALL);

function reverseString($str)
{
    $result = '';
    // BEGIN (write your solution here)
    for($i = mb_strlen($str) - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }
    // END

    return $result;
}
