<html>
<head>
<style>
table{
tr{
}
 
width:60%;

}
font-size:150%;
tr:nth-child(even){
background-color:#2196F3; color:white;
}
tr:nth-child(odd){
background-color:#f44336; color:white;
 
}

</style>
</head>
<body>
<table align="center">
<tr>
</tr>

<?php 
<th>Name</th>
<th>Address</th>
<th>Age</th>
<th>Phone</th>
<th>BGroup</th>
<th>Disease</th>

$servername="localhost";
$username="root";
$password="";
$db="patient";
$conn=new mysqli($servername,$username,$password,$db);
$sql="SELECT * FROM patient";
$result=mysqli_query($conn,$sql); if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["Address"]."</td>";
echo "<td>".$row["Age"]."</td>"
echo "<td>".$row["Phone"]."</td>";
echo "<td>".$row["BGroup"]."</td>";
echo "<td>".$row["Disease"]."</td>"; echo "</tr>"; 
}
}
?>
</table>
</body>
</html>
