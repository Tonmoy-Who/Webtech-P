<?php

echo "<h3>For Loop (1 to 20):</h3>";

for ($i = 1; $i <= 20; $i++)
{
    echo $i . " ";
}
echo "<br><br>";

echo "<h3>While Loop (Even numbers 1 to 20):</h3>";

$j = 1;
while ($j <= 20) 
{
    if ($j % 2 == 0) 
    {
        echo $j . " ";
    }
    $j++;
}

echo "<br><br>";
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple",
    "orange" => "orange",
    "mango" => "golden"
];

echo "<h3>Fruit Colors:</h3>";

foreach ($fruits as $fruit => $color) 
{
    echo ucfirst($fruit) . " is " . $color . "<br>";
}

echo "<br>";

echo "<h3>Break Statement Example (Print first 5 numbers):</h3>";

for ($k = 1; $k <= 20; $k++) 
{
    if ($k > 5) 
    {
        break; 
    }
    echo $k . " ";
}

?>