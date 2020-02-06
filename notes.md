# Unit testing with PHPUnit: Testing a collection class (7/10)

[https://www.youtube.com/watch?v=M3Iakg1AstY](https://www.youtube.com/watch?v=M3Iakg1AstY)

```php
<?php

$collection = new Collection([
  'one', 'two', 'three'
]);

echo $conllection->count(); // 3


$users = new Collection([
  'user1', 'user2', 'user3'
]);

foreach ($users as $user) {
  echo $user->getEmail();
}

```