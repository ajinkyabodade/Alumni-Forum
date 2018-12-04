<?php
session_start();
?>

<html>
<head>
<title>Edit Profile</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Edit Profile <div class="form-group" style="margin:30px;" align="center" >
	
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>

<div class="main" >

<?php		
$id=$_SESSION["id"];
$conn = new mysqli("localhost","root","","alumni");

$result = $conn->query("SELECT * FROM userdata where no='$id'");
	if ($result->num_rows > 0) {
	  
	    while($row = $result->fetch_assoc()){
			?>
		<div align="center"><?php
		
		echo "Name = ";
		echo $row["Name1"] ;
		echo "<br>";
		echo "EmailId = ";
		echo $row["EmailID"] ;
		echo "<br>";
		echo "Mobile No. = ";
		echo $row["MobileNo"] ;
		echo "<br>";
		echo "Year of Passing = ";
		echo $row["yearofpassing"] ;
		echo "<br>";
		echo "Company = ";
		echo $row["company"] ;
		echo "<br>";
		echo "Date of Birth = ";
		echo $row["dateofbirth"] ;
		echo "<br>";
		echo "Password = ";
		echo $row["Password"] ;
		echo "<br>";


		}
	}




?>
<a href="editprofile.php" >Edit</a>
</div>

<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>



</body>
</html>