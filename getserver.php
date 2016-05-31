
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
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','gamedb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"gamedb");
$sql="SELECT position FROM playertable WHERE username = '12' ";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
   // echo "<td>" . $row['position'] . "</td>";
    //echo "<td>" . $row['data'] . "</td>";
    //echo "<td>" . $row['points'] . "</td>";
    //echo "<td>" . $row['playing'] . "</td>";
    echo "</tr>";
}

echo $row;

mysqli_close($con);
?>
</body>
</html>