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
$pwd = $_POST["pwd"];
echo $name;
/*
$sql = "INSERT INTO UserLogin (LastName, Password )
VALUES ('$name', 'test123')";
*/
$sql = "select * from UserLogin where LastName= '$name' and Password= '$pwd' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Welcome";
} else {
    echo "access denied";
}
/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
    echo "
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();
?>
