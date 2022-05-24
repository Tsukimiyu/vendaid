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

$sql7 = "DELETE FROM orderslip WHERE id=1";
$result7 = $conn->query($sql7);

$sql8 = "TRUNCATE TABLE testing";
$result8 = $conn->query($sql8);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Carousel</title>
	<meta charset="utf-8">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		*{

			margin: 0;
			padding: 0;
			background-color: white;

		}
		.carousel{
			height: 500px;
		}
		.carousel .carousel-item{
			width: 500px;

		}

.btn:focus {
  background-color: #74ABFF;
  outline: none;
}

.btn {
	border-radius: 20px;
	border: 1px solid #74ABFF;
	background-color: #74ABFF;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 5px 50px 5px;
	letter-spacing: 1px;
	height: 70%;
	transition: transform 80ms ease-in;
	position: relative;
}

h1 {
	margin-top: 10px;
	padding: 0;
	font-weight: medium;
}

	</style>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">

	$(document).ready(function(){


		$(".carousel").carousel({
			indicators: false
		});

  $(".next").click(function() {
    $(".carousel").carousel("next");
  });

  $(".prev").click(function() {
    $(".carousel").carousel("prev");
  });

		
		setInterval(function(){
			$(".carousel").carousel("next");
		}, 3000); 



	});
</script> 
</head>


<body>

<center>

<div class="carousel">
	 <h1> Press picture to continue </h1>
	<a href="#one" class="carousel-item" onclick='window.location.href="RFID.php"'><img src="images/1.png" alt=""></a>
	<a href="#two" class="carousel-item" onclick='window.location.href="RFID.php"' ><img src="images/2.png" alt=""></a>
	<a href="#three" class="carousel-item" onclick='window.location.href="RFID.php"'><img src="images/3.jpg" alt=""></a>
	<a href="#four" class="carousel-item" onclick='window.location.href="RFID.php"'><img src="images/4.png" alt=""></a>
	<a href="#five" class="carousel-item" onclick='window.location.href="RFID.php"'><img src="images/5.png" alt=""></a>
</div>
<center>
   <div class="btn prev"> < PREVIOUS </div>
     <div class="btn next"> NEXT > </div>

</center>
       
</body>
</html>
