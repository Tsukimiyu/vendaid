<?php 
$conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
$sql1 = "UPDATE btnstatus SET btnval= 0 WHERE id=1";
$sql2 = "UPDATE btnstatus SET btnval= 0 WHERE id=2";
$sql3 = "UPDATE btnstatus SET btnval= 0 WHERE id=3";
$sql4 = "UPDATE btnstatus SET btnval= 0 WHERE id=4";
$sql5 = "UPDATE btnstatus SET btnval= 0 WHERE id=5";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);


 ?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<title>UserOption</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			background-color: white;	
			}	
	</style>
	<style >


		a.button {
		-webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    text-decoration: none;
    color: #262626;
    background: transparent;
    border: none !important;
}

a.hover {
background: #dde3ed;
	}


	</style>
}


</head>
<body
	<div class="row">

		<center><h1 style= "color:black;">Choose User Option</h1></center>
		<a href="adminlogin.php" style="color: white;" class="button">Go to Google</a>
		</div>
		<div class="row"></div>
		<div class="col s1"></div>
	    <div class="col s4">
		    	<div class="card">
	        <div class="card-image">
	          <a href="PrivateRFID.php"><img src="Images/private.png" alt="private" ></a>
	        </div>
	        <div style="background-color:lightskyblue;" class="card-content ">
	          <p style="background-color:lightskyblue;"> Private </p>
	        </div>
	      </div>

	        </div>
	    <div class="col s2"></div>
	    <div class="col s4">
	          <div class="card">
	        <div class="card-image">
	          <a href="publicRFID.php"><img src="Images/public.png" alt="public" ></a>
	        </div>
	        <div style="background-color:lightskyblue;" class="card-content ">
	          <p style="background-color:lightskyblue;" > Public </p>
	        </div>
	      </div>
	        </div>
	</div>        
</body>
</html>