<?php
$servername = "localhost";
$username = "root";
$password = "Meads1996";
$dbname = "rocket";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_POST["user"];
echo $name;
$sql = "INSERT INTO UserLogin (LastName, Password )
VALUES ('$name', 'test123')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
