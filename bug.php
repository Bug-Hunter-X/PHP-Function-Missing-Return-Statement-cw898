```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
    // Error: Missing return statement
  }
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers);
```