<?php
//including the database connection file
include_once("configure.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM teacher ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="teacheradd.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Password</td>
		
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['password']."</td>";		
		echo "<td><a href=\"teacheredit.php?id=$row[id]\">Edit</a> | <a href=\"teacherdelete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
