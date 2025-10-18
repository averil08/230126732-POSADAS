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
    }
    ?> 
</body>
</html>