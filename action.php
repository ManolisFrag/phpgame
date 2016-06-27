<?php
session_start();
// Echo session variables that were set on previous page
echo "You are " . $_SESSION['currentplayer'] . ".";
//rolls the dice with a random number
$dienumber = rand(1,6);
echo "<br> The Dice number is " . $dienumber;

$nam = $_SESSION['currentplayer'];


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
//updates the position of the player based on the dice number
$sql = "UPDATE playertable SET position = position + $dienumber WHERE username = '{$nam}'";



if ($conn->query($sql) === TRUE) {
    
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//part of logic

$db_handle = mysql_connect($servername, $username, $password);
$db_found = mysql_select_db($dbname, $db_handle);

if ($db_found) {

$SQL = "SELECT position FROM playertable WHERE username='{$nam}'";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {
$dbpos = $db_field['position'];
echo "<br> Your position is " . $db_field['position'] . "<BR>";
$_SESSION["sessionposition"] = $db_field['position'];
}



mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}

$conn->close();
//check the form after that..

//show the options to the player based on his position
if($dbpos == 2){
	echo "If you want to move 4 steps <br> forward,"."<br>". "you have to pay for this <br> with your Email address";
}else{
	if($dbpos == 4){
		echo "If you want to move 20 steps <br> forward,"."<br>". " you have to pay for this <br> with your Social Media <br> password";			
	}else{
		if($dbpos == 5){
		echo "Skip a turn <br> forward,"."<br>". " Press continue <br> ";			
	}else{
	if($dbpos == 6){
		echo "If you want to move 6 steps <br> forward,"."<br>". " you have to pay for this <br> with your Signature";			
	}else{
		if($dbpos == 7){
		echo "If you want to move 4 steps <br> forward,"."<br>". " you have to pay for this <br> with your Hair color";	
	}else{
		if($dbpos == 9){
		echo "If you want to move 3 steps <br> forward,"."<br>". " you have to pay for this <br> with your Eye color";	
	}else{
		if($dbpos == 10){
		echo "If you want to move 3 steps <br> forward,"."<br>". " you have to pay for this <br> with your Favorite color";	
	}else{
		if($dbpos == 13){
		echo "If you want to move 4 steps <br> forward,"."<br>". " you have to pay for this <br> with your Number of siblings";	
	}else{
		if($dbpos == 14){
		echo "If you want to move 4 steps <br> forward,"."<br>". " you have to pay for this <br> with your Height";	
	}else{
		if($dbpos == 15){
		echo "If you want to move 4 steps <br> forward,"."<br>". " you have to pay for this <br> with your Weight";	
	}else{
		if($dbpos == 16){
		echo "You entered in a"."<br>". " secret passage."."<br>". "Press No to continue";	
	}else{
		if($dbpos == 21){
		echo "If you want to move 2 steps <br> forward,"."<br>". " you have to pay for this <br> with your Shoe size";	
	}else{
		if($dbpos == 22){
		echo "If you want to move 5 steps <br> forward,"."<br>". " you have to pay for this <br> with your Picture";	
	}else{
		if($dbpos == 23){
		echo "If you want to move 4 steps <br> forward,"."<br>". " you have to pay for this <br> with your City where you live";	
	}else{
		if($dbpos == 25){
		echo "If you want to move 4 steps <br> forward, "."<br>". "you have to pay for this <br> with your Province";	
	}else{
		if($dbpos == 27){
		echo "If you want to move 5 steps <br> forward,"."<br>". " you have to pay for this <br> with your Mom's name";	
	}else{
		if($dbpos == 28){
		echo "If you want to move 13 steps <br> forward,"."<br>". " you have to pay for this <br> with your Email password";	
	}else{
		if($dbpos == 30){
		echo "If you want to move 6 steps <br> forward, "."<br>". "you have to pay for this <br> with your Dad's name";	
	}else{
		if($dbpos == 32){
		echo "Change position with a player <br> of your choise, "."<br>". "and Press Continue <br> ";	
	}else{
		if($dbpos == 34){
		echo "If you want to move 4 steps <br> forward, "."<br>". "you have to pay for this <br> with your Best friend's name"; //incentive missing	
	}else{
		if($dbpos == 35){
		echo "If you want throw the dice again,"."<br>". " you have to pay for this <br> with your Nationality";	
	}else{
		if($dbpos == 37){
		echo "If you want to move 3 steps <br> forward,"."<br>". " you have to pay for this <br> with your Last name";	
	}else{
		if($dbpos == 39){
		echo "If you want to move 3 steps <br> forward, "."<br>". "you have to pay for this <br> with your Address Number";	
	}else{
		if($dbpos == 41){
		echo "You entered in a"."<br>". " secret passage."."<br>". "Press No to continue";	
	}else{
		if($dbpos == 42){
		echo "If you want to move 3 steps <br> forward,"."<br>". " you have to pay for this with your Postcode";	
	}else{
		if($dbpos == 43){
		echo "If you want to move 3 steps <br> forward,"."<br>". " you have to pay for this with your Street";	
	}else{
		if($dbpos == 44){
		echo "If you want to move 2 steps <br> forward,"."<br>". " you have to pay for this with your most diliked foods";	
	}else{
		if($dbpos == 45){
		echo "Skip a turn <br> "."<br>". " Press continue <br> ";	
	}else{
		if($dbpos == 46){
		echo "If you want to move 1 step <br> forward,"."<br>". " you have to pay for this with your favorite animal";	
	}else{
		if($dbpos == 48){
		echo "If you want to move 2 steps <br> forward,"."<br>". " you have to pay for this with your favourite TV presentor";	
	}else{
		if($dbpos == 49){
		echo "If you want to move 10 steps <br> forward,"."<br>". " you have to pay for this <br> with your Bank account pincode";	
	}else{
		if($dbpos == 52){
		echo "Change position with a player <br> of your choise, "."<br>". "and Press Continue <br> ";	
	}else{
		if($dbpos == 53){
		echo "If you want to move 3 steps <br> forward,"."<br>". " you have to pay for this <br> with your phone number";	
	}else{
		if($dbpos == 57){
		echo "If you want to stay on this <br> tile,"."<br>". " you have to pay for this <br> with your School/Work";	
	}else{
		if($dbpos == 59){
		echo "Say which data you want to <br> delete,"."<br>". " and Press <br> Continue";	
	}else{
		if($dbpos == 60){
		echo "If you want to move 5 steps <br> forward,"."<br>". " you have to pay for this <br> with your date of birth";	
	}else{
		if($dbpos == 61){
		echo "If you want to stay on this tile, "."<br>". "you have to pay for this with <br> your favourite game";	
	}else{
		if($dbpos == 62){
		echo "If you want to get 3 steps <br> back,"."<br>". " you have to pay for this with <br> your favourite phone brands";	//change in datasubmit
	}else{
		if($dbpos > 62){
		echo "You have finished the game. Congratulations!";	
	}else{
		echo "Nothing to do, <br> Press Continue";
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
} }}}}}}}}}
?>

<meta name="viewport" content="width=device-width, initial-scale=1.5">
<br><br><input type="button" onclick="location.href='firstscreen.php';" value="Continue" /><br><br>
<input type="button" onclick="location.href='playerdata.php';" value="Yes, I want to pay for this" /><br><br>
<input type="button" onclick="location.href='deny.php';" value="No, I want to keep my data safe" /><br><br>