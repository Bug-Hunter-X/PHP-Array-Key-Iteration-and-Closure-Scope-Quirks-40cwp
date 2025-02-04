In PHP, a common yet subtle error arises when dealing with array keys.  Consider this scenario:

```php
$myArray = [];
$myArray[1] = 'one';
$myArray[3] = 'three';
$myArray[2] = 'two';

foreach ($myArray as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

You might expect the output to be ordered as 1, 2, 3.  However, PHP arrays are actually ordered maps, and the keys are not guaranteed to be iterated in numerical order. The output will reflect the order in which elements were inserted, resulting in:  Key: 1, Value: one\nKey: 3, Value: three\nKey: 2, Value: two.

This is particularly problematic if you rely on the numerical ordering for calculations or other operations expecting a sequential index.

Another lesser known issue pertains to the way PHP handles variable scope within closures (anonymous functions). If a closure accesses a variable from its surrounding scope, it creates a reference, not a copy.  Changes made to the variable within the closure are reflected in the outer scope.  This can be unintuitive and lead to unexpected side effects if not carefully managed.