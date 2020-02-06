# Unit testing with PHPUnit

## Steps

1. install composer: [https://getcomposer.org/](https://getcomposer.org/)
2. install PHPUnit `composer require phpunit/phpunit`
3. How to run `phpunit` or `./vendor/bin/phpunit`
4. Set: composer.json file
    ```json
        {
      "require": {
        "phpunit/phpunit": "^8.5"
      },
      "autoload": {
        "psr-4": {
          "App\\": "app"
        }
      }
    }
    ```

5. Run command: `composer dump-autoload -o`
6. Creating: phpunit.xml
   ```xml
   <?xml version="1.0" encoding="UTF-8"?>
    <phpunit 
      bootstrap="vendor/autoload.php"
      colors="true"
      verbose="true"
      stopOnFailure="false">

      <testsuites>
        <testsuite name="Test suite">
          <directory>tests</directory>
        </testsuite>
      </testsuites>
    </phpunit>
   ```

---

## Testing a collection class (7/10)

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

---

## Unit testing with PHPUnit: Testing a Calculator: Addition (8/10)

```php
<?php

$addition = new Addition;
$addtion->setOperands([5, 10]); // 15

$division = new Division;
$division->setOperands([100, 2]); // 50

$calculator = new Calculator;
$calculator->setOperations([$addition, $division]); // [15, 50]

```