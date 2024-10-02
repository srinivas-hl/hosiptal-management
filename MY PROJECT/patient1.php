<?php

$servername="localhost";

$username="root";

$password="";

$db="patient";

$conn=new mysqli($servername,$username,$password,$db);

$s1=$_POST["pname"];
 
$s2=$_POST["address"];

$s3=$_POST["Age"];

$s4=$_POST["pnumber"];
 
$s5=$_POST["bgroup"];

$s6=$_POST["case"];

$sql="INSERT INTO patient(Name,Addess,Age,Phone,BGroup,Disease) VALUES
('$s1','$s2','$s3','$s4,'$s5','$s6')";

if(mysqli_query($conn,$sql)==TRUE)

echo "New Recorded created successfully...";

else

echo "error :".$conn->error;

$conn->close();

?>
