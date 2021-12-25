<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            background-color: gold;
        }

        p {
            color: darkslateblue;
            font-size: 1.1em;
        }

        a {
            width: 150px;
            font-size: 115%;
            font-style: bold;
            text-align: center;
            background-color: darkgreen;
            color: burlywood;
            display: block;
        }
    </style>
</head>

<body>
<?php
$firstname = $_POST['firstname'];
$family_name = $_POST['family_name'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);


$sql = "CREATE DATABASE students";
if ($conn->query($sql) === TRUE) {
    echo "Database Students created successfully <br>";
} else {
    echo "Error creating database: <br>" . $conn->error;
}
$conn->close();


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: <br> " . $conn->connect_error);
}
echo "<p>Connected successfully </p><br>";



$sql = "CREATE TABLE students.Studentsdata (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(20) NOT NULL,
    family_name VARCHAR(20) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "<p>Table Studentsdata created successfully</p> <br>";
} else {
    echo "<p>Error creating table: </p> <br> " . $conn->error;
}


$sql = "INSERT INTO students.Studentsdata (firstname, family_name)
    VALUES ('$firstname', '$family_name')";

if ($conn->query($sql) === TRUE) {
    echo "<p>New record created successfully </p> <br>";
} else {
    echo "<p>Error: " . $sql . "<br></p>" . $conn->error;
}
echo ' <a href="index.php">На головну</a>  <br>';
echo ' <a href="test1.php" id ="output1">Переглянути записи</a> ';
$conn->close();
?>
</body>

</html>