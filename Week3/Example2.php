<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student = array(
        array("Name"=> "Omar", "Year of birth" => 2004, "Address" => "Mogadishu" , "Phone number" => "613797589"),
        array("Name"=> "Ali", "Year of birth" => 2000, "Address" => "Hargeisa" , "Phone number" => "615765678"),
        array("Name"=> "Osman", "Year of birth" => 1997, "Address" => "Balad weyne" , "Phone number" => "613456789")
    
        
    );
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Year of Birth</th><th>Address</th><th>Phone Number</th></tr>";
    foreach ($student as $s) {
  echo "<tr>";
  echo "<td>" . $s["Name"] . "</td>";
  echo "<td>" . $s["Year of birth"] . "</td>";
  echo "<td>" . $s["Address"] . "</td>";
  echo "<td>" . $s["Phone number"] . "</td>";
  echo "</tr>";
    }
    echo "</table>";
    $info = array(
    "omar",
    "Abdinur", 
    20,
    2006
    );

    if (is_array($student)){
        echo "yes is an array";

    }
    else{
        echo "isn't Array";
    }
    echo "<br>";
    

    
    if (in_array("Omar", array_column($student, "Name"), true)){
        echo "yes Omar in the array";

    }
    else{
        echo "Omar is not in the Array";
    }
    echo "<br>";

    echo "the size of the array is: " . count($student);
    

    // Function ;
    function sum ($a, $b=100){
        return $a + $b;
    }
    echo "<br>";
    echo sum(10,200);
    echo "<br>";




    ?>
</body>
</html>