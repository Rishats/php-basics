###Задание

Функция `app` из файла `ns/App.php` используется в двух других файлах: `Exercise.php` и `Solution.php`. Выполните подключение файла `ns/App.php` к указанным (example и solution), таким образом, чтобы их можно было использовать одновременно.

####Решение

```php
<?php

// BEGIN (write your solution here)
set_include_path('ns');
require_once 'App.php';
// END

function exercise()
{
    return app();
}
```

```php
<?php

// BEGIN (write your solution here)
set_include_path('ns');
require_once 'App.php';
// END

function solution()
{
    return app();
}
```
