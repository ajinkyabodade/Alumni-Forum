<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<?php 
$id=$_SESSION["id"];
$conn=new mysqli("localhost", "root","","alumni");

$name12 = $_POST["upname"];
$emailid = $_POST["upemail"];
$mobileno= $_POST["upmob"];
$yof = $_POST["upyof"];
$comp = $_POST["upcom"];
$dob = $_POST["updob"];
$pass = $_POST["uppass"];



//$id=$_POST['id'];

if($result = $conn->query("update userdata set Name1='$name12' , EmailID='$emailid' ,  MobileNo='$mobileno' , yearofpassing='$yof' , company='$comp' , dateofbirth='$dob' ,  Password='$pass'  where no='$id'"))
{
  echo "Successful";
 echo "<BR>";
}
else
{
 echo "UnSuccessful";
 }
?>














</body>
</html>