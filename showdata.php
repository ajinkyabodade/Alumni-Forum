<?php
session_start();
?>
<?php 
    
     $check=$_SESSION["id"];
    if($check=='') 
    { 
        
header("Location: login.html"); 
         
        die("Redirecting to login.html"); 
    } 
	
?>









<html>
<head>
</head>
<body>
<?php

$conn=new mysqli("localhost","root","","alumni");


$result = $conn->query("SELECT * FROM (
    SELECT * FROM post ORDER BY id DESC LIMIT 15
) sub
ORDER BY id ASC 	");



	if ($result->num_rows > 0) {
		?>
	
	  <?php
	    while($row = $result->fetch_assoc()){

?>
		
	    <font align="center" size="4" color="white">  <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row['name'];?>   <?php echo ":<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['chat'];?> <br> </font><br>
		
	
<?php  }

}?>
</body>
</html>