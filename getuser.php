
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','gamedb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

// Return array init
$data = array();

mysqli_select_db($con,"gamedb");
$sql="SELECT username, position FROM playertable";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    $row_array['username'] = $row['username'];
	$row_array['position'] = $row['position'];
	
	// Push to array
	array_push($data, $row_array);
	
	//echo "<tr>";
	//echo "<br>";  
    //echo $row['username'];
	//echo "<br>";
    //echo $row['position'];   //new added
    //echo "<td>" . $row['data'] . "</td>";
    //echo "<td>" . $row['points'] . "</td>";
    //echo "<td>" . $row['playing'] . "</td>";
    //echo "</tr>";
	echo $row['username'];
}
//echo json_encode($data);

//echo $row;

mysqli_close($con);
?>
</body>
</html>