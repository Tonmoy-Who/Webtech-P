<?php
$temperature = 18;   
$day = 3;           

if (!is_numeric($temperature)) 
{
    echo "Invalid temperature value!<br>";
    exit();
}

if ($day < 1 || $day > 7) 
{
    echo "Invalid day value! Day must be between 1 and 7.<br>";
    exit();
}

echo "<h3>Temperature Check:</h3>";

if ($temperature < 10) 
{
    echo "It's cold.<br>";
} 
elseif ($temperature >= 10 && $temperature <= 25) 
{
    echo "It's warm.<br>";
} 
else 
{
    echo "It's hot.<br>";
}

echo "<h3>Day of the Week:</h3>";

switch ($day) 
{
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day!";
}
?>