<!DOCTYPE html>
<html>
<head>
<H1> MY WEB APP</H1>
<H2>
CONNECTING TO A DATABASE
</H2>
</head>
<body>
<?php
$con = new mysqli("mysql", "root", "password", "mydb");
// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM mytable";
$result = $con->query($sql);  
if ($result->num_rows > 0) 
{
?>
<table border='1'>
<tr>
<th>Nom</th>
<th>Ville</th>
<th>Age</th>
</tr>
<?php
	while($array = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $array['Nom']; ?></td>
<td><?php echo $array['Ville']; ?></td>
<td><?php echo $array['Age']; ?></td>
</tr>
<?php
}
}
$con->close();
?>
</table>

</body>
</html>
