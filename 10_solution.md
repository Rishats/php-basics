###Задание

Инкрементируйте переменную `$i` через операцию `++`;
Прибавьте к `$j` число `3` используя конструкцию `+=`;
Удалите переменную `$var`;

####Решение

```php
<?php

namespace Exercise;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testI()
    {
        $i = 5;
        // BEGIN (write your solution here)
        $i++;
        // END

        $this->assertEquals(6, $i);
    }

    public function testJ()
    {
        $j = 10;
        // BEGIN (write your solution here)
        $j += 3;
        // END

        $this->assertEquals(13, $j);
    }

    public function testUnset()
    {
        $var = "string";
        // BEGIN (write your solution here)
        unset($var);
        // END

        $this->assertFalse(isset($var));
    }
}
```
