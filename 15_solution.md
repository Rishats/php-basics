###Задание

Реализуйте функцию `multiArgs`, которая возвращает произведение всех переданных аргументов. Вызванная без аргументов, должна вернуть `null`.

Пример:

```php
null == multiArgs();
1 == multiArgs(1);
16 == multiArgs(2, 8);
```

####Решение

```php
<?php

namespace App\Solution;

// BEGIN (write your solution here)
function multiArgs(...$numbers)
{
    if (empty($numbers)) {
        return null;
    }
    return array_product($numbers);
}
// END
```
