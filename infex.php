<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "maydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$sql = "SELECT ID, Fname, Lname FROM tbl_user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["Ftname"] . " " . $row["Lname"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>