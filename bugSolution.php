The solution is to use strict comparison (`!==`) to differentiate between `false` (needle not found) and `0` (needle found at index 0).

```php
<?php
$haystack = "hello world";
$needle = "hello";
if (strpos($haystack, $needle) !== false) {
  echo "Substring found!";
}
?>
```
By using strict comparison (`!==`), we explicitly check for the boolean `false` value and avoid the ambiguity caused by loose comparison.