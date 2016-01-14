<?php

namespace Exercise;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testI()
    {
        $i = 5;
        // BEGIN (write your solution here)

        // END


        $this->assertEquals(6, $i);
    }

    public function testJ()
    {
        $j = 10;
        // BEGIN (write your solution here)

        // END


        $this->assertEquals(13, $j);
    }

    public function testUnset()
    {
        $var = "string";
        // BEGIN (write your solution here)

        // END


        $this->assertFalse(isset($var));
    }
}
