<?php

/* '', ' ', null, [] */

// BEGIN (write your solution here)
function isPresent($arg)
{
    return !in_array($arg, ['', ' ', null, []], true);
}
// END
