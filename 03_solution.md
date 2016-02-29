###Задание

Реализуйте функцию, которая высчитывает объем шара на основании его радиуса по формуле `4πR³/3`

Пример:

```php
ballVolume(1) // ≈ 4.2
```

####Решение

```php
<?php

namespace App\Solution;

// BEGIN (write your solution here)
function ballVolume($num) {
    return 4 * pi() * $num ** 3 / 3;
}
// END
```
