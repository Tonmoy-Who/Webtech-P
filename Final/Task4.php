<?php
function sum($a, $b) 
{
    return $a + $b;
}

function factorial($n) 
{
   
    if ($n <= 1) 
    {
        return 1;
    }
    
    return $n * factorial($n - 1);
}

function is_prime($n) 
{
    if ($n < 2) 
    {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) 
    {
        if ($n % $i == 0) 
        {
            return false; 
        }
    }
    
    return true; 
}

echo "<h2>PHP Functions Lab Task</h2>";

echo "<h3>1. Sum Function Results:</h3>";
echo "sum(5, 3) = " . sum(5, 3) . "<br>";
echo "sum(10, 20) = " . sum(10, 20) . "<br>";
echo "sum(-5, 8) = " . sum(-5, 8) . "<br>";

echo "<h3>2. Factorial Function Results:</h3>";
echo "factorial(5) = " . factorial(5) . "<br>";
echo "factorial(7) = " . factorial(7) . "<br>";
echo "factorial(0) = " . factorial(0) . "<br>";
echo "factorial(1) = " . factorial(1) . "<br>";

echo "<h3>3. Prime Number Check Results:</h3>";
$test_numbers = [2, 3, 5, 7, 11, 13, 4, 6, 8, 9, 10, 1, 0, 17, 19, 20];

foreach ($test_numbers as $number) 
{
    if (is_prime($number)) 
    {
        echo "$number is a prime number<br>";
    } 
    else 
    {
        echo "$number is NOT a prime number<br>";
    }
}
?>