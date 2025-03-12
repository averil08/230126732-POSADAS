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

        //EXERCISE 3
        echo "<br> EXERCISE 3";
        for ($x = 1; $x <=100; $x++) {
            echo "<br> $x <br>";
        }

        //EXERCISE 4
        echo "<br> EXERCISE 4";
        
    ?>
</body>
</html>