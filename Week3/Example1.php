<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Info = array(
       "omar",
       "Abdinur",
       "Ahmed"
    );


  echo "<table border='1'>";
  echo "<tr>";
  echo "<th>Name</th>";
  echo "</tr>"; 

  foreach ($Info as $value) {
      echo "<tr>";
      echo "<td>$value</td>";
      echo "</tr>";
  }
  echo "</table>";

    

    ?>
</body>
</html>