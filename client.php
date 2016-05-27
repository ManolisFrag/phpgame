<?php
session_start();
?>

<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "You are " . $_SESSION['username'] . ".";
$dienumber = rand(1,6);
echo "The Die number is" . $dienumber;
$nam = $_SESSION['username'];
?>

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

$sql = "UPDATE playertable SET position = $dienumber WHERE username = '{$nam}'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>


</body>

</html>



