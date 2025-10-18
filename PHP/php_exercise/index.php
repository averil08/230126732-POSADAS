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
    echo "Fahrenheit is " . $fahrenheit . " °F"; 

    echo "<h3>Swapping Variables</h3>
    ";
    $varA = 10;
    $varB = 20;
    echo "Before swap: <br> varA = " . $varA . ", varB = " . $varB; 
    $temp = $varA; //temporary variable
    $varA = $varB;
    $varB = $temp;
    
    echo "<br>After swapping: ";
    echo "<br>Variable A: " . $varA . "\n";
    echo "<br>Variable B: " . $temp . "\n";

    echo "<h3>Salary Calculator</h3>
    ";
    $basic_salary = 30000;
    $allowance = 1000;
    $deduction=  2000; 
    $total = $basic_salary - ($deduction + $allowance);
    echo "Net salary = " . $total; 

    echo "<h3>BMI Calculator</h3>
    ";
    $weight = 70;
    $height = 1.75;
    $BMI =  $weight / ($height); 
    echo "weight = " . $weight . "kg <br>";
    echo "height = " . $height . "m <br>"; 
    echo "BMI = " . $BMI; 
    
    echo "<h3>String Manipulation</h3>
    ";
    $sentence = "Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.";
    echo "number of character: " . (strlen($sentence));
    echo "<br>number of character: " . (str_word_count($sentence));

    echo "<h3>Bank Account Simulation</h3>
    ";
    $balance = 1000;
    $deposit= 100;
    $balance_dep = $balance + $deposit;
    $current = $balance_dep;
    $withdraw = 10;
    $balance_with = $current - $withdraw;
    echo "Deposit: " . $deposit;
    echo "<br>Updated balance: " . $balance_dep;
    echo "<br>Withdrawal: " . $withdraw;
    echo "<br>Updated balance: " . $balance_with;

    echo "<h3>Simple Grading System</h3>
    ";
    $math = 80;
    $english = 70;
    $science =  90;
    $avg = ($math + $english + $science)/3; 
    
    if ($avg >= 90) {
        $grade = 'A';
    } elseif ($avg >= 80) {
        $grade = 'B';
    } elseif ($avg >= 70) {
        $grade = 'C';
    } elseif ($avg >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    echo "Math score: " . $math . "<br>";
    echo "English score: " . $english . "<br>";
    echo "science score: " . $science . "<br>";
    echo "average score: " . number_format($avg, 2);

    
    echo "<h3>Currency Converter</h3>
    ";
    $PHP = 1000;
    $USD = 0.01717333;
    $EUR = 0.01466;
    $php_usd = $PHP * $USD;
    $php_eur = $PHP * $EUR;

    echo "PHP (1000) to USD = " . $php_usd . "US dollars <br>";
    echo "PHP (1000) to EUR = " . $php_eur . " EUR <br>";

    echo "<h3>Travel Cost Estimator</h3>
    ";
    $distance = 200;
    $fuel_consumption = 8;
    $fuel_price = 4;
    $cost = $fuel_consumption *$fuel_price;

    echo "Estimated Travel Cost distance (200), fuel consumption (8), 'fuel price (4) <br>= " . $cost . " dollars";
    ?> 
</body>
</html>