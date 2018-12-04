<?php
session_start();
?>




<html>
<head>
<title>Edit Profiles</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Edit Profiles  <div class="form-group" style="margin:30px;" align="center" >
	
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
		  <div align="center">
		  <form id="form1" name="form1" method="post" action="updateprofile.php" >
		  <?php echo "Name = ";	?><input type="text" name="upname"	 value="<?php echo $row["Name1"] ?>" />
          <?php echo "<br>Email Id = ";	?><input type="text"	name="upemail" value="<?php echo $row["EmailID"] ?>" /> 
          <?php echo "<br>Mobile No. = ";	?><input type="text"	name="upmob" value="<?php echo $row["MobileNo"] ?>" />
          <?php echo "<br>Year of Passing = ";	?><input type="text"	name="upyof"  value="<?php echo $row["yearofpassing"] ?>" />
          <?php echo "<br>Company = ";	?><input type="text"	name="upcom"   value="<?php echo $row["company"] ?>" />
          <?php echo "<br>Date of Birth = ";	?><input type="date"	name="updob"  value="<?php echo $row["dateofbirth"] ?>" />
          <?php echo "<br>Password = ";	?><input type="password"	name="uppass"  value="<?php echo $row["Password"] ?>" />
          <?php echo "<br>";	?>
          <input type="submit" value="Submit" />
          </form>
          
          
          <?php
	
	    }
	}

?>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>




</body>
</html>