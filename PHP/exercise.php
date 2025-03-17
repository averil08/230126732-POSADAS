<!DOCTYPE html>
<html>
<head>
    <title>PHP Example</title>
</head>
<body>
    <?php
    echo "<br> EXERCISE 1";
    $a = 15;
    $b = 7;
    $c = $a + $b;
    $d = $a - $b;
    $e = $a * $b;
    $f = $a / $b;
    echo "<br>Sum is: $c <br>";
    echo "Difference is: $d <br>";
    echo "Product is: $e <br>";
    echo "Quotient is: $f <br>";

    //EXERCISE 2
    echo "<br> EXERCISE 2";
    $num = 12;
    if ($num % 2 == 0) {
        echo "<br>$num is even <br>";
    } else {
        echo "<br>$num is odd <br>";
    }

    // EXERCISE 3
    echo "<br> EXERCISE 3<br>";
    $i = 1; 
    while ($i <= 100) {  
        $word = ''; // Initialize the word string

        if ($i % 3 == 0) {
            $word .= 'Fizz'; 
        }
            
        if ($i % 5 == 0) {
            $word .= 'Buzz'; 
        }

        if ($word == '') {
            echo "<br>". $i; //if not %3,5 print number
        } else {
            echo "<br>" . $word; // Fizz, Buzz, or FizzBuzz
        }

        echo "<br>";
        $i++; // Increment the counter
    }

    echo "<br> EXERCISE 4<br>";
    function greet($name) {
        return "Hello, $name!";
    }

    $name = "John";
    echo greet($name);

    function square($number) {
        return $number * $number;
    }

    $num = 4;
    echo "<br>" . square($num) . "<br>"; 
    ?>

    <p>EXERCISE 5</p>
    <form method="post">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            echo "<p>Hello, $name!</p>";
        }
    ?>
</body>
</html>