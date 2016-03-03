###Задание

Напишите функцию `sumDouble`, которая принимает на вход два числа: начало последовательности и конец последовательности, а возвращает сумму возведенных в квадрат чисел последовательности с шагом `2`. То есть из последовательности `3`, `7` будут взяты только числа `3, 5, 7`.

Пример:

```php
8 * 8 + 10 * 10 + 12 * 12 + 14 * 14 == sumDouble(8, 14);
3 * 3 + 5 * 5 == sumDouble(3, 6);
```

####Решение

```php
<?php

namespace App\Solution;

// BEGIN (write your solution here)
function sumDouble($start, $end)
{
    $result = 0;

    for ($i = $start; $i <= $end; $i = $i + 2) {
        $result = $result + $i * $i;
    }

    return $result;
}
// END
```
