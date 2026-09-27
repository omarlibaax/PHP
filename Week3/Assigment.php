<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest and Smallest</title>
</head>
<body>
    <h1>Largest and Smallest of Three Integers</h1>
// Question 1:
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


    //Question 2:
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
     // Question 3:
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
    







    
    


    ?>
</body>
</html>