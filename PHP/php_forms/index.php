<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP EXERCISES</h1>
    
    <form method="POST">
        <h3>Introduce yourself:</h3>
        Name: <input type="text" name="name" required><br>
        Age: <input type="text" name="age" required><br>
        Color: <input type="text" name="color" required>

        <h3>Simple Math:</h3>
        A: <input type="text" name="a" required><br>
        B: <input type="text" name="b" required><br>

        <h3>Rectangle: Area & Perimeter</h3>
        Length: <input type="text" name="length" required><br>
        Width: <input type="text" name="width" required><br>

        <h3>Temperature Converter</h3>
        Celsius: <input type="text" name="cel" required><br>

        <h3>Swapping Variables</h3>
        varA: <input type="text" name="varA" required><br>
        varB: <input type="text" name="varB" required><br>

        <h3>Salary Calculator</h3>
        Salary: <input type="text" name="sal" required><br>
        Allowance: <input type="text" name="all" required><br>
        Deduction: <input type="text" name="deduc" required><br>

        <h3>BMI Calculator</h3>
        Weight: <input type="text" name="weight" required><br>
        Height: <input type="text" name="height" required><br>

        <h3>Bank Account</h3>
        Balance: <input type="number" name="balance" required><br>
        Deposit: <input type="number" name="deposit" required><br>
        Withdraw: <input type="number" name="withdraw" required><br><br>

        <h3>Grades</h3>
        Math: <input type="number" name="math" required><br>
        English: <input type="number" name="english" required><br>
        Science: <input type="number" name="science" required><br><br>

        <h3>Currency Converter</h3>
        PHP Amount: <input type="number" name="php" required><br><br>

        <h3>Travel Cost</h3>
        Distance: <input type="number" name="distance" required><br><br>
        Fuel Consumption: <input type="number" name="fuel" required><br><br>
        Fuel Price: <input type="number" name="price" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <?php
    if(isset($_POST['submit'])) {
        echo "<h2>Results:</h2>";

        //Introduce Yourself
        $name = $_POST['name'];
        $age = $_POST['age'];
        $color = $_POST['color'];
        echo "<h3>Introduce Yourself</h3>";
        echo "Hi, I'm $name. I am $age years old and my favorite color is $color";

        //Simple Math
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $a + $b;
        echo "<h3>Simple Math</h3>";
        echo "The sum of $a + $b = $c";

        //Rectangle: Area & Perimeter
        $length= $_POST['length'];
        $width = $_POST['width'];
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);
        echo "<h3>Area and Perimeter of a Rectangle</h3>";
        echo "Area = $area | Perimeter = $perimeter";

        //Temperature Converter
        $celsius = $_POST['cel'];
        $fahrenheit = $length * 9/5 + 32;
        echo "<h3>Temperature Converter</h3>";
        echo "Fahrenheit = $fahrenheit"; 

        //Swapping Variables
        $varA = $_POST['varA'];
        $varB = $_POST['varB'];
        echo "<h3>Temperature Converter</h3>";
        echo "Before Swapping<br>"; 
        echo "Variable A = $varA <br>";
        echo "Variable B = $varB <br><br>"; 

        $temp = $varA;
        $varA = $varB;
        $varB = $temp;
        echo "After Swapping<br>"; 
        echo "Variable A = $varA<br>";
        echo "Variable B = $temp<br>"; 

        //Salary Calculator
        $basic_salary = $_POST['sal'];
        $allowance= $_POST['all'];
        $deduction = $_POST['deduc'];
        $total = $basic_salary - ($deduction + $allowance);
        echo "<h3>Salary Calculator</h3>";
        echo "Salary = $basic_salary | Allowance = $allowance | Deduction = $deduction <br>"; 
        echo "Net Salary = $total"; 

        //BMI Calculator
        $weight = $_POST['weight'];
        $height= $_POST['height'];
        $BMI= $weight / ($height);
        echo "<h3>BMI Calculator</h3>";
        echo "Weight = $weight | Height = $height <br>";
        echo "BMI = $BMI"; 

        //Bank Account Simulation
        $balance = $_POST['balance'];
        $deposit = $_POST['deposit'];
        $withdraw = $_POST['withdraw'];
        $updated = $balance + $deposit - $withdraw;
        echo "<h3>Bank Account:</h3> Balance: $balance, Deposit: $deposit, Withdraw: $withdraw, Final Balance: $updated<br>";

        // Grading
        $math = $_POST['math'];
        $english = $_POST['english'];
        $science = $_POST['science'];
        $avg = ($math + $english + $science) / 3;
        if ($avg >= 90) $grade = 'A';
        elseif ($avg >= 80) $grade = 'B';
        elseif ($avg >= 70) $grade = 'C';
        elseif ($avg >= 60) $grade = 'D';
        else $grade = 'F';
        echo "<h3>Grades:</h3> Average = " . number_format($avg, 2) . " | Grade = $grade<br>";

        // Currency
        $PHP = $_POST['php'];
        $USD = 0.01717333;
        $EUR = 0.01466;
        $php_usd = $PHP * $USD;
        $php_eur = $PHP * $EUR;
        echo "<h3>Currency Converter:</h3> ₱$PHP = $php_usd USD | $php_eur EUR<br>";

        // Travel Cost
        $distance = $_POST['distance'];
        $fuel = $_POST['fuel'];
        $price = $_POST['price'];
        $cost = $fuel * $price;
        echo "<h3>Travel Cost:</h3> Distance = $distance km, Estimated Cost = $cost dollars<br>";
    }
    ?> 
</body>
</html>