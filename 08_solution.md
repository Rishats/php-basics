###Задание

Реализуйте функцию `isBigEven`, которая возвращает `true` в том случае если переданный параметр это четное число больше или равно 1000 и `false` в остальных случаях.

####Решение

```php
<?php

namespace App\Solution;

// BEGIN (write your solution here)
function isBigEven($num) {
    return ($num % 2 == 0) && (1000 <= $num);
}
// END
```
