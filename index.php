<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully dude";
$sql = "SELECT ID, username, points FROM playertable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["username"]. " " . $row["points"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>