<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 PHP Assignment</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1, h2 { color: #111; }
        .section { margin-bottom: 25px; }
        table { border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 8px 12px; text-align: left; }
        th { background: #d9d9d9; }
    </style>
</head>
<body>
    <h1>Week 3 PHP Assignment</h1>

    <?php
    // Question 1: largest and smallest of three integers
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
    ?>

    <div class="section">
        <h2>1. Largest and Smallest of Three Integers</h2>
        <?php
        echo "Numbers: $number1, $number2, $number3<br>";
        echo "Largest: $largest<br>";
        echo "Smallest: $smallest<br>";
        ?>
    </div>

    <?php
    // Question 2: divisible by 3, 5, or both
    $number = 6;
    ?>

    <div class="section">
        <h2>2. Divisible by 3, 5, or Both</h2>
        <?php
        if ($number % 3 == 0 && $number % 5 == 0) {
            echo "$number is divisible by both 3 and 5.<br>";
        } elseif ($number % 3 == 0) {
            echo "$number is divisible by 3.<br>";
        } elseif ($number % 5 == 0) {
            echo "$number is divisible by 5.<br>";
        } else {
            echo "$number is not divisible by either 3 or 5.<br>";
        }
        ?>
    </div>

    <div class="section">
        <h2>3. Odd Numbers and Even Numbers</h2>
        <?php
        echo "Odd numbers from 2 to 20: ";
        for ($i = 2; $i <= 20; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
        echo "<br>Even numbers from 35 to 7: ";
        for ($i = 35; $i >= 7; $i--) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        echo "<br>";
        ?>
    </div>

    <div class="section">
        <h2>4. Numbers Divisible by 2 and 5</h2>
        <?php
        echo "Numbers divisible by both 2 and 5 from 50 down to 2: ";
        for ($i = 50; $i >= 2; $i--) {
            if ($i % 2 == 0 && $i % 5 == 0) {
                echo $i . " ";
            }
        }
        echo "<br>";
        ?>
    </div>

    <div class="section">
        <h2>5. Reverse a Number</h2>
        <?php
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
    </div>

    <div class="section">
        <h2>6. LCM of Two Positive Integers</h2>
        <?php
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
        ?>
    </div>

    <div class="section">
        <h2>7. HCF of Two Integers</h2>
        <?php
        $num1 = 18;
        $num2 = 24;
        $hcf = 1;

        for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
            if ($num1 % $i == 0 && $num2 % $i == 0) {
                $hcf = $i;
            }
        }

        echo "HCF of $num1 and $num2 is: $hcf<br>";
        ?>
    </div>

    <div class="section">
        <h2>8. Multiplication Table up to 12 x 12</h2>
        <?php
        echo "<table>
                <tr><th></th>";

        for ($col = 1; $col <= 12; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        for ($row = 1; $row <= 12; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= 12; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>

    <div class="section">
        <h2>9. Prime or Not Prime</h2>
        <?php
        $checkNumber = 17;
        $isPrime = true;

        if ($checkNumber <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($checkNumber); $i++) {
                if ($checkNumber % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "$checkNumber is a prime number.<br>";
        } else {
            echo "$checkNumber is not a prime number.<br>";
        }
        ?>
    </div>

    <div class="section">
        <h2>10. Prime Numbers Between 10 and 50</h2>
        <?php
        echo "Prime numbers between 10 and 50: ";
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
        echo "<br>";
        ?>
    </div>

    <div class="section">
        <h2>1) PHP Array Processing</h2>
        <?php
        $numbers = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, -2, 9];

        echo "Array values: ";
        foreach ($numbers as $value) {
            echo $value . " ";
        }
        echo "<br><br>";

        $total = 0;
        $evenTotal = 0;
        $oddTotal = 0;
        $min = $numbers[0];
        $max = $numbers[0];
        $minPosition = 0;
        $maxPosition = 0;

        foreach ($numbers as $index => $value) {
            $total += $value;

            if ($value % 2 == 0) {
                $evenTotal += $value;
            } else {
                $oddTotal += $value;
            }

            if ($value < $min) {
                $min = $value;
                $minPosition = $index;
            }

            if ($value > $max) {
                $max = $value;
                $maxPosition = $index;
            }
        }

        echo "Total of all elements: $total<br>";
        echo "Total of even elements: $evenTotal<br>";
        echo "Total of odd elements: $oddTotal<br>";
        echo "Minimum element: $min at position $minPosition<br>";
        echo "Maximum element: $max at position $maxPosition<br>";
        ?>
    </div>

    <div class="section">
        <h2>2) Associative Array of Two Dimensions (Colour Table)</h2>
        <?php
        $colorArray = [
            'Light' => ['Red' => 'Light Red', 'Green' => 'Light Green', 'Blue' => 'Light Blue'],
            'Normal' => ['Red' => 'Normal Red', 'Green' => 'Normal Green', 'Blue' => 'Normal Blue'],
            'Dark' => ['Red' => 'Dark Red', 'Green' => 'Dark Green', 'Blue' => 'Dark Blue']
        ];

        echo '<table>';
        echo '<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>';

        foreach ($colorArray as $rowName => $columns) {
            echo '<tr>';
            echo '<th>' . $rowName . '</th>';
            echo '<td>' . $columns['Red'] . '</td>';
            echo '<td>' . $columns['Green'] . '</td>';
            echo '<td>' . $columns['Blue'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        ?>
    </div>

    <div class="section">
        <h2>3) Associative Array of Two Dimensions (Student Records)</h2>
        <?php
        $studentRecords = [
            [
                'Row' => 'CA221',
                'Name' => 'Mohamed Ahmed Ali',
                'Phone' => '0648440403',
                'Address' => 'Laba Dhagax, Wardhiigley'
            ],
            [
                'Row' => 'CA223',
                'Name' => 'Ahmed Abdi Jama',
                'Phone' => '0647223201',
                'Address' => 'Taleex, Hodan'
            ],
            [
                'Row' => 'CA221',
                'Name' => 'Amina Nur Adan',
                'Phone' => '0646990276',
                'Address' => 'Macmacaanka, Dharkeynley'
            ]
        ];

        echo '<table>';
        echo '<tr><th>Row</th><th>Name</th><th>Phone</th><th>Address</th></tr>';

        foreach ($studentRecords as $record) {
            echo '<tr>';
            echo '<td>' . $record['Row'] . '</td>';
            echo '<td>' . $record['Name'] . '</td>';
            echo '<td>' . $record['Phone'] . '</td>';
            echo '<td>' . $record['Address'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        ?>
    </div>
</body>
</html>
