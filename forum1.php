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






<html >
<head>
<title> Forum Portal</title>
		<link href="bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>



</head>

<body  	 >
<div class="main" >
 <div class="logo">
        <h1><a href="index.html">Forum &nbsp;<span>Portal</span></a></h1>
      </div>
	    <div class="header">
    <div class="header_resize">
	  <div class="menu_nav">
        <ul>
		
	 
		 <li ><a href="logout.php"><span>Logout</span></a></li>
		  <li ><a href="showprofile.php"><span>Edit Profile</span></a></li>
          <li><a href="contact1.html"><span>Contact Us</span></a></li>
        </ul>
      </div>
	  </div>
	  </div>
	 <br><br><br><br><br>
	 
	 
	 <div class="ScrollStyle">
	 <div id="show"> 
	 
	 
	 
	 
         <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" >
$(document).ready(function() {
setInterval(function () {
$('#show').load('showdata.php')
},1000);   
});


</script>
 
</div>
</div>

<form action="forum.php" method="post" pbzloc="55">
	
		<div class="form-group" style="margin:10px;"   >	<table width="100%"><tr>
<td><input  class="form-control" name="sugg" cols="10" rows="10" placeholder="Enter A Message To Post......... "></td>
<td>&nbsp;</td><td>
<input class="btn btn-primary"  type="submit" value="Post" ></div></td></tr></table>
</form>
</div>
</div>
<script>
setTimeout(function() {asd.reload();},30000);
</script>
</body>
</html>
