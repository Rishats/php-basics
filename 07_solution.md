###Задание

Реализуйте функцию `hello`, которая принимает на вход строчку и возвращает строку по указанному ниже формату:

```php
"Given string was: 'milk'" == solution("milk");
"Given string was: 'h\nello!'" == solution("h\nello!");
```

####Решение

```php
<?php

namespace App\Solution;

// BEGIN (write your solution here)
function hello($str)
{
    return "Given string was: '$str'";
}
// END
```
