<!DOCTYPE html>
<html>
<body>
<?php
$a = 5;
$b = 5.34;
$c = "25";
var_dump($a);
var_dump($b);
var_dump($c);
$x = acos(8);
echo(is_nan($x));

// NAN

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// PHP Casting Strings and Floats to Integers
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
</body>
</html>