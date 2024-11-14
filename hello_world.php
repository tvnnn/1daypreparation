<!DOCTYPE html>
<html>
<body>
<h1>First PHP Page</h1>
<?php
// In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

// However; all variable names are case-sensitive!
$color = "red";
echo "My house is $color.<br>";
echo "My house is $COLOR.<br>";
echo "My house is $CoLoR.<br>";

$a = false;
$b = 0;
if ($a === $b)
{
    echo "Yessss!";
}

// Check integer overflow
$number = -214748390000000000000000;
var_dump($number);

?>
</body>
</html>