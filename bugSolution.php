The best way to handle this is to always iterate using the keys directly from the array, and not rely on numerically incrementing an index:

```php
<?php
$data = [];
$data["key1"] = 1;
$data["key2"] = 2;

foreach ($data as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```

Alternatively, if you need numerical indexing, ensure your array only contains numeric keys from the start.  Or, if you have associative keys and need a numerical order, you can use `array_values()` to get just the values in a numerically indexed array:

```php
<?php
$data = [];
$data["key1"] = 1;
$data["key2"] = 2;

$numericData = array_values($data);

foreach($numericData as $index => $value){
    echo "Index: " . $index . ", Value: " . $value . "\n";
}
?>
```

This avoids the unpredictable behavior associated with mixed key types and numerical indexing.