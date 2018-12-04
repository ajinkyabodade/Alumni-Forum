<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
</head>

<body><?php 
$name = $_POST["Fullname"];
$emailid = $_POST["emailid"];
$mobileno= $_POST["Mobno"];
$yof = $_POST["yearofpassing"];
$caw = $_POST["companywork"];
$dob = $_POST["DOB"];
$pass = $_POST["pass"];


$conn=new mysqli("localhost","root","","Alumni");

$stmt=$conn->prepare("insert into userdata (Name1,EmailId,MobileNo,yearofpassing,company,dateofbirth,Password) values (?,?,?,?,?,?,?)");
$stmt->bind_param("ssddsss", $name,$emailid,$mobileno,$yof,$caw,$dob,$pass);
$stmt->execute();
$stmt->close();



?> <script> alert("Registration Successful....");</script>
<?php include("home.html"); ?>


</body>
</html>