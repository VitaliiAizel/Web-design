<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>first</title>
    <style>
        body {
            background-color: lemonchiffon;
            color: darkturquoise;
        }
        a{
            font-style: bold;
            font-size: large;
            color: brown;
        }
        .b {
            color: darkgreen;
        }
    </style>

</head>

<body>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, family_name FROM Studentsdata LIMIT 4 OFFSET 0";
$result = $conn->query($sql);
echo " <p class='b'> Виведення 1 : </p>" . "<br>";
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<table border = 2, bgcolor="#8b0000">';
        echo '<tr><td>'."id: ".$row["id"].'</td>
                  <td>'."  Ім'я: ".$row["firstname"].'</td>
                  <td>'." Прізвище:  ".$row["family_name"].'</td></tr>';
        echo '</table>';
    }
} else {
    echo "0 results";
}
echo '<br><br>';
echo ' <a href="index.php">На головну</a> <br><br> <br>';
echo ' <a href="test2.php?offset='. 2 . '">'. 2  .'</a>';
echo ' <a href="test3.php?offset='. 3 . '">'. 3  .'</a>';
echo ' <a href="test4.php?offset='. 4 . '">'. 4  .'</a>';
echo ' <a href="test5.php?offset='. 5 . '">'. 5 .'</a>';

?>
</body>

</html>