
<?php
 session_start();
?>
<html>
<head>
</head><body>




<?php
$conn=new mysqli("localhost","root","","alumni");
$emailid = $_POST["emailid"];
$pass = $_POST["pass"];
$result = $conn->query("SELECT * FROM userdata where EmailID= '$emailid' and Password= '$pass'");
	if ($result->num_rows > 0) {
	
	
	             while($row = $result->fetch_assoc()){
				 $_SESSION["id"] = $row['no']; }
				header("Location: forum1.php"); 	 
include("forum1.php");
		 	}		
else
{
?> <script> alert("Invalid Login");</script>
<?php include("login.html"); }?>

</pre>

</body>
</html>
  