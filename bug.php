In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this example:

```php
<?php
$data = [];
$data["key1"] = 1;
$data["key2"] = 2;

foreach ($data as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
}

//Attempting to access the array using numerical keys 
for($i=0; $i< count($data); $i++){
  echo "Key: " . $i . ", Value: " . $data[$i] . "\n";
}
?>
```

While the first loop iterates correctly, the second loop using numerical keys (0,1, etc.) will produce an unexpected result. PHP arrays can be both numeric and associative, but the numerical indexing isn't necessarily sequential when associative keys are present.  Accessing elements using numerical keys in such cases might yield unexpected results, including `undefined offset` errors or inaccurate values. 