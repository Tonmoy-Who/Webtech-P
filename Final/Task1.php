<?php
$name = "Tonmoy";      // String
$age = 20;             // Integer
$height = 5.8;         // Float
$isStudent = true;     // Boolean

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br>";
echo "Student: " . ($isStudent ? "Yes" : "No") . "<br><br>";

$num1 = 10;
$num2 = 3;

echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br><br>";

echo "Sum using echo: " . ($num1 + $num2) . "<br>";
print "Sum using print: " . ($num1 + $num2) . "<br><br>";

echo "<h3>Variable Types and Values:</h3>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($height);
echo "<br>";
var_dump($isStudent);
echo "<br>";
?>