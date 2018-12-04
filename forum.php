
<?php
session_start();
?>
<?php 
    
     $id=$_SESSION["id"];
?>


<html>
<head></head><body>

<font size="6">


<?php
$sugg = $_POST["sugg"];

$conn=new mysqli("localhost","root","","alumni");
$result = $conn->query("SELECT * FROM userdata where no='$id' ");
	if ($result->num_rows > 0) {
?>
	
	  <?php
	    while($row = $result->fetch_assoc()){


	$name=$row['Name1'];
	
	
 }}


$conn=new mysqli("localhost","root","","alumni");
$stmt=$conn->prepare("insert into post (chat,name) values(?,?) ");
$stmt->bind_param("ss", $sugg,$name );
$stmt->execute();
$stmt->close();
header("Location: forum1.php");

?>




</font>
</body>
</html>