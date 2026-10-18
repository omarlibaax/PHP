<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
            color: #444;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"], input[type="reset"] {
            background: #d3dce6;
            color: black;
            border: none;
            cursor: pointer;
            margin-right: 10px;
            padding: 8px 12px;
        }

        input[type="reset"] {
            background: #d3dce6;
        }

        .info-box {
            margin-top: 20px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 350px;
            box-shadow: 0 0 8px rgba(0,0,0,0.08);
        }

        .info-box h3 {
            margin-top: 0;
            color: #333;
        }

        .info-box p {
            margin: 8px 0;
            color: #444;
        }
    </style>
</head>
<body>
    <div>
        <form action="Example1.php" method="post">
            <h2>Registration Form</h2>

            <label for="FullName">Full Name:</label>
            <input type="text" id="FullName" name="FullName"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>

            <label> Gender :</label>
            <input type="radio" name="Gender" value="Male"> Male
            <input type="radio" name="Gender" value="Female"> Female<br><br>
            <label for="comment">Comments:</label>
            <textarea name="comment" cols="30" rows="6" id="comment"></textarea><br><br>
            <label for="Facults">Facults:</label> <br>  
            <input type="checkbox" name="checkbox" value="checkbox"> IT <br><br>
            <input type = "checkbox" name = "checkbox" value = "checkbox"> Medicine <br><br>
            <input type = "checkbox" name = "checkbox" value = "checkbox"> Engineering <br><br>
            <input type="reset" value="Reset">
            <input type="submit" value="Register">
        </form>

        <?php
            echo "<div class='info-box'>";
            echo "<h3>Registration Information</h3>";
            echo "<p><strong>Full Name:</strong> " . $_POST["FullName"] . "</p>";
            echo "<p><strong>Comments:</strong> " . $_POST["comment"] . "</p>";
            if (!empty($_POST["Gender"])) {
                echo "<p><strong>Gender:</strong> " . $_POST["Gender"] . "</p>";
            } else {
                echo "<p><strong>Gender:</strong> Not selected</p>";
            }
           // use for loop to display selected faculties
            if (!empty($_POST["checkbox"])) {
                echo "<p><strong>Facults:</strong> ";
                foreach ($_POST["checkbox"] as $faculty) {
                    echo $faculty . " ";
                }
                echo "</p>";
            } else {
                echo "<p><strong>Facults:</strong> Not selected</p>";
            }
            echo "</div>";
        ?>
    </div>
</body>
</html>
