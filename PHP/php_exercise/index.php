<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP EXERCISES</h1>
    <?php
    echo "<h3>Introduce yourself:</h3>";
    $name = "Averil Posadas";
    $age = 20;
    $color = "white";
    echo "Hi, I'm " . $name . " I am " . $age . " and my favorite color is" . $color; 

    echo "<h3>Simple Math:</h3>";
    $a = 20;
    $b = 30;
    $c = $a + $b;
    echo "Sum is " . $c; 

    echo "<h3>Area and Perimeter of a Rectangle</h3>";
    $length = 5;
    $width = 3;
    $area = $length * $width;
    $perimeter =  2 * ($length + $width); 
    echo "Area is " . $area . " cm"; 
    echo "<br>";
    echo "Perimeter is " . $perimeter . " cm"; 

    echo "<h3>Temperature Converter</h3>
    ";
    $celsius = 20;
    $fahrenheit = $length * 9/5 + 32;
    $perimeter =  2 * ($length + $width); 
    echo "Fahrenheit is " . $fahrenheit . " °F"; 

    echo "<h3>Swapping Variables</h3>
    ";
    $celsius = 20;
    $fahrenheit = $length * 9/5 + 32;
    $perimeter =  2 * ($length + $width); 
    echo "Fahrenheit is " . $fahrenheit . " °F"; 
    ?> 
</body>
</html>