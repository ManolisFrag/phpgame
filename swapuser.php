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

$sql = "SELECT id, username, position FROM playertable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Name: ". $row["username"]. " - id: ". $row["id"].  "<br>";
     }
} else {
     echo "0 results";
}

echo "Write the Id of the player you want to swap position";

$conn->close();
?>  

</body>
</html>

<form action="swapactual.php" method="get">
<input type="text" name="sID" /><br>
<input type="submit" />
</form>