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

            $i++; // Increment the counter
    }


        //EXERCISE 4
        echo "<br> EXERCISE 4";
        function fib ($n) { // a function called fib, declaire variable n (the sequence number)
            for ($n=0;$n<30;$n++) {
                if ($n < 3) { return $n; } // if n is smaller than 3 return n (1 or 2)
                else { return fib ($n - 1) + fib ($n - 2); } 
            /* if the number is 3 or above do 2 sums (n-1) and (n-2)
            and then add the 2 sums together (n-1)+(n-2)
            Example Fibonacci number 4
            (4-1)+(4-2) = 5
            3 + 2 = 5
            */
        }
        print $n;
    }
    ?>
</body>
</html>