<?php
session_start();
// Echo session variables that were set on previous page
$nam2 = $_SESSION['currentplayer'];
$servername = "37.97.182.151";
$username = "root";
$password = "2o1s1xSV";
$dbname = "gamedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$db_handle = mysql_connect($servername, $username, $password);
$db_found = mysql_select_db($dbname, $db_handle);

if ($db_found) {
//Get the position of the current player
$SQL = "SELECT position FROM playertable WHERE username='{$nam2}'";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

$dbpos = $db_field['position'];

}

mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}
//Show what data the player has to enter

if($dbpos == 2){
	echo "Enter your email";	
}else{
	if($dbpos == 4){
		echo "Enter your password";	
	}else{
	if($dbpos == 6){
		echo "Enter your signature";	
	}else{
		if($dbpos == 7){
		echo "Enter your hair color";	
	}else{
		if($dbpos == 9){
		echo "Enter your eye color";	
	}else{
		if($dbpos == 10){
		echo "Enter your favorite color";	
	}else{
		if($dbpos == 13){
		echo "Enter your Number of siblings";	
	}else{
		if($dbpos == 14){
		echo "Enter your height";	
	}else{
		if($dbpos == 15){
		echo "Enter your weight";	
	}else{
		if($dbpos == 21){
		echo "Enter your shoe size";	
	}else{
		if($dbpos == 22){
		echo "Please take a picture";	
	}else{
		if($dbpos == 23){
		echo "Enter your Woon plaats";	
	}else{
		if($dbpos == 25){
		echo "Enter your Province";	
	}else{
		if($dbpos == 27){
		echo "Enter your Mom's Name";	
	}else{
		if($dbpos == 28){
		echo "Enter your Email password";	
	}else{
		if($dbpos == 30){
		echo "Enter your Dad's Name";	
	}else{
		if($dbpos == 34){
		echo "Enter your Best friend's name";	
	}else{
		if($dbpos == 35){
		echo "Enter your Nationality";	
	}else{
		if($dbpos == 37){
		echo "Enter your Last name";	
	}else{
		if($dbpos == 39){
		echo "Enter your Adress Number";	
	}else{
		if($dbpos == 42){
		echo "Enter your Postcode";	
	}else{
		if($dbpos == 43){
		echo "Enter your Street";	
	}else{
		if($dbpos == 44){
		echo "Enter your most liked foods";	
	}else{
		if($dbpos == 46){
		echo "Enter your favourite animal";	
	}else{
		if($dbpos == 48){
		echo "Enter your favourite TV presentor";	
	}else{
		if($dbpos == 49){
		echo "Enter your pincode";	
	}else{
		if($dbpos == 53){
		echo "Enter your phone number";	
	}else{
		if($dbpos == 57){
		echo "Enter your School/Work";	
	}else{
		if($dbpos == 60){
		echo "Enter your date of birth";	
	}else{
		if($dbpos == 61){
		echo "Enter your favourite game";	
	}else{
		if($dbpos == 62){
		echo "Enter your favourite phone brands";	
	}else{
		if($dbpos > 62){
		echo "You have finished the game. Congratulations!";	
	}else{
		echo "Nothing to do";
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
} }}

//Redirect to datasubmit.php
?>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.5">
<form action="datasubmit.php" method="get">
<input type="text" name="fname" /><br>
<input type="submit" />
</form>



</body>