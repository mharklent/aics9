<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="studentadd.html">Add New Data</a><br/><br/>

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
    echo "<td><a href=\"studentedit.php?id=$row[id]\">Edit</a> | <a href=\"studentdelete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
}
?>
</table>
</body>
</html>