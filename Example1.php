<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Introduction</title>
</head>
<body>
    <h1>PHP Introduction</h1>

    <p>This page will print the following text:</p>
    <?php print "HELLO WORLD PHP"; ?>

    <?php

    echo "<h2>Generating Output</h2>";
    echo "Hello World!<br>";
    print "Hello PHP!<br>";

    echo "Using echo with ", "two parameters.<br>";
    /*
    =========================================================
    TERNARY OPERATOR
    =========================================================
    */

    $x = 10;
    $y = 20;

    echo "<h2>Ternary Operator</h2>";
    ($x < $y)
        ? print "$x is less than $y<br>"
        : print "$x is greater than $y<br>";

    echo "<h2>Quotation Marks</h2>";

    $a = 10;
    echo 'Hellow $a<br>';
    echo "Hellow $a<br>";

    ?>
</body>
</html>