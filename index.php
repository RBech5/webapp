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
$con = pg_connect("host=172.17.0.2 port=5432 dbname=mydb user=docker password=docker");
$result = pg_query($con, "SELECT * FROM mytable");
$val = pg_fetch_all($result);
?>
<table border='1'>
<tr>
<th>Nom</th>
<th>Ville</th>
<th>Age</th>
</tr>
<?php
foreach($val as $array)
{
?>
<tr>
<td><?php echo $array['Nom']; ?></td>
<td><?php echo $array['Ville']; ?></td>
<td><?php echo $array['Age']; ?></td>
</tr>
<?php
}
pg_close($con);
?>
</table>

</body>
</html>
