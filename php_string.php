<!DOCTYPE html>
<html>
<body>
<?php
//There is a big difference between double quotes and single quotes in PHP.
//
//Double quotes process special characters, single quotes does not.

$name = "John";
echo "<br>My name is $name.<br>";
echo 'My name is $name.<br>';

// Length of string
echo strlen($name)."<br>";

// Word count
echo str_word_count($name)."<br>";

// Search text in string
echo "Careful with loose comparison";
echo strpos("Hello World!", "World!")."<br>";

// To upper
echo strtoupper("Hello World!")."<br>";
// To lower
echo strtolower("Hello World!")."<br>";
// Replace
echo str_replace("Hello", "World!", "Hello World!")."<br>";
// Reverse string
echo strrev("Hello World!")."<br>";
$a = explode(" ", "Hello World!");
print_r($a);

// STRING CONCATENATION
$x = "Hello";
$y = "World!<br>";
$z = $x . " " . $y;
echo $z;

echo "$x $y";

// SLICING STRINGS
$x = "Hello World!";

// Slice with offset and length
echo substr($x, 6, 5);

// Slice from offset to end of string
echo substr($x, 6);

// Slice from the End with negative offset
echo substr($x, -5, 3);

// Slice with negative length
echo substr($x, 5, -3);

// ESCAPE STRING
echo "We are the so-called \"Vikings\" from the north.";
// Octal value
$x = "\110\145\154\154\157";
echo $x;
echo "<br>";

// Hex value
$x = "\x48\x65\x6c\x6c\x6f";
echo $x;
echo "<br>";


?>
</body>
</html>