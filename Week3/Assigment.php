<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest and Smallest</title>
</head>
<body>
    <h1>Largest and Smallest of Three Integers</h1>
// Question 1: find the largest and smallest of three integers using if else statement.
    <?php
    $number1 = 15;
    $number2 = 8;
    $number3 = 23;

    if ($number1 >= $number2 && $number1 >= $number3) {
        $largest = $number1;
    } elseif ($number2 >= $number1 && $number2 >= $number3) {
        $largest = $number2;
    } else {
        $largest = $number3;
    }

    if ($number1 <= $number2 && $number1 <= $number3) {
        $smallest = $number1;
    } elseif ($number2 <= $number1 && $number2 <= $number3) {
        $smallest = $number2;
    } else {
        $smallest = $number3;
    }

    echo "Numbers: $number1, $number2, $number3<br>";
    echo "Largest: $largest<br>";
    echo "Smallest: $smallest<br>";


    //Question 2: program checks if a number is divisible by 3, 5, or both.
    $number = 6;
    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "$number is divisible by both 3 and 5.<br>";
    } elseif ($number % 3 == 0) {
        echo "$number is divisible by 3.<br>";
    } elseif ($number % 5 == 0) {
        echo "$number is divisible by 5.<br>";
    } else {
        echo "$number is not divisible by either 3 or 5.<br>";
    }
     // Question 3: Odd numbers from 2 to 20 and even numbers from 35 to 7
    echo "<h2>Odd Numbers from 2 to 20</h2>";
    for ($i = 2; $i <= 20; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    echo "<h2>Even Numbers from 35 to 7</h2>";
    for ($i = 35; $i >= 7; $i--) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    // Question 4: 
    echo "<h2>Numbers Divisible by 2 and 5 from 50 to 2</h2>";
    for ($i = 50; $i >= 2; $i--) {
        if ($i % 2 == 0 && $i % 5 == 0) {
            echo $i . " ";
        }
    }
    //Question 5 : program finds reverse numbers like 123 = 321

    echo "<h2>Reverse a Number</h2>";
    $numberToReverse = 123;
    $remainingDigits = $numberToReverse;
    $reversedNumber = 0;

    while ($remainingDigits > 0) {
        $lastDigit = $remainingDigits % 10;
        $reversedNumber = ($reversedNumber * 10) + $lastDigit;
        $remainingDigits = intdiv($remainingDigits, 10);
    }

    echo "Original number: $numberToReverse<br>";
    echo "Reversed number: $reversedNumber<br>";

    //Question 6: program calculates lcm of two positive integers 
    echo "<h2>LCM of Two Positive Integers</h2>";

    $a = 12;
    $b = 18;

    if ($a > $b) {
        $lcm = $a;
    } else {
        $lcm = $b;
    }

    while (true) {
        if ($lcm % $a == 0 && $lcm % $b == 0) {
            break;
        }
        $lcm++;
    }

    echo "LCM of $a and $b is: $lcm<br>";

    //Question 7: program calculates hfc of two integers.

    $num1 = 18;
    $num2 = 24;
    $hcf = 1;

    for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $hcf = $i;
        }
    }

    echo "HCF of $num1 and $num2 is: $hcf<br>";

    // Question 8: Write a program that produces multiplication table (up to 12*12) using nested loops.
    echo "<h2>Multiplication Table</h2>";
    echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse: collapse; text-align: center; font-family: Arial, sans-serif;'>";
    echo "<tr><th></th>";

    for ($col = 1; $col <= 12; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    for ($row = 1; $row <= 12; $row++) {
        echo "<tr>";
        echo "<th>$row</th>";

        for ($col = 1; $col <= 12; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }

        echo "</tr>";
    }
    echo "</table>";

    //Question 9: program that prints the number is prime or non prime.

    $number = 17;
    $isPrime = true;

    if ($number <= 1) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "$number is a prime number.<br>";
    } else {
        echo "$number is not a prime number.<br>";
    }
    
    //Question 10: program that print prime number bewteen 10 to 50.
    echo "<h2>Prime Numbers between 10 and 50</h2>";
    for ($i = 10; $i <= 50; $i++) {
        $isPrime = true;
        if ($i <= 1) {
            $isPrime = false;
        } else {
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }
        if ($isPrime) {
            echo $i . " ";
        }
    }

    ?>
</body>
</html>