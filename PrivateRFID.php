<?php
function RFIDREAD($rfid) {
  $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
  $sql = "SELECT RFID FROM users WHERE RFID='{$rfid}' AND Status=1 ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if (!empty($row['RFID'])) {
    if ($row['RFID'] == $rfid){
    header("Location: private.php?rfid=".$row['RFID']."");
  } 
  } else {
    header("Location: useroption.php");
}
}


if (isset($_POST['RFID'])){
  RFIDREAD($_POST['RFID']);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Private RFID Scan</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      background-color: white;
  </style>
  <title></title>
</head>
<style type="text/css">
    *{
      margin: 0;
      padding: 0;
      background-color: white;
  </style>
  <title></title>
</head>
<style>body {
    margin: 0;
    padding: 0;
    background: url() no-repeat;
    background-size: cover;
    background-color: white;
}
body {
  overflow: hidden;
/* Hide scrollbars */
}
.textbox {
    height: 2%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px white;
}
 

.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
    color: white;
}
  
.button {
  margin-top:20px;
  height: 15%;
  width: 15%;
  margin-left: 2%;
  border-radius: 20px;
  border: 1px solid #74ABFF;
  background-color: #74ABFF;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 1em;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.button:active {
  transform: scale(0.95);
}

.button:focus {
  background-color: #5C9DFF;
  outline: none;
}

.title1{

  margin: 5px;
  padding: 5px;
 display: inline-block;

}

</style>

<script>
function gFocus() {
  document.getElementById("RFID").focus();
}

</script>
<body onload="gFocus()" onclick="gFocus()">
  
  <div class="container-1">
    <a href="carousel.php"><input type="button" placeholder="Back" class="button" value=" < Back"></a> 
    <center> <h2 class="title1" style= "color:black;">Please tap ID on scanner</h2>
    <div class="row"></div>
    <img src="images/RFID1.png" width="35%" height="35%" onclick="gFocus()" id="image"></center>
  <form name="form" action="" method="post">
  <div class="textbox"><input style=back type="text" autofocus="autofocus" name="RFID" id="RFID" class="rfidtxt">
  </div>
  </div>
</body>
</html><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Public RFID Scan</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      background-color: white;
  </style>
  <title></title>
</head>
<style type="text/css">
    *{
      margin: 0;
      padding: 0;
      background-color: white;
  </style>
  <title></title>
</head>
<style>body {
    margin: 0;
    padding: 0;
    background: url() no-repeat;
    background-size: cover;
    background-color: white;
}
body {
  overflow: hidden;
/* Hide scrollbars */
}
.textbox {
    height: 2%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px white;
}

.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
    color: white;
}
  
.button {
  margin-top:20px;
  height: 15%;
  width: 15%;
  margin-left: 2%;
  border-radius: 20px;
  border: 1px solid #74ABFF;
  background-color: #74ABFF;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 1em;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.button:active {
  transform: scale(0.95);
}

.button:focus {
  background-color: #5C9DFF;
  outline: none;
}


.title1{

  margin: 5px;
  padding: 5px;
 display: inline-block;

}

</style>

<script>
function gFocus() {
  document.getElementById("RFID").focus();
}

</script>
<body onload="gFocus()" onclick="gFocus()">
  
  <div class="container-1">
    <a href="carousel.php"><input type="button" placeholder="Back" class="button" value=" < Back"></a> 
    <center> <h2 class="title1" style= "color:black;">Please tap ID on scanner</h2>
    <div class="row"></div>
    <img src="images/RFID1.png" width="35%" height="35%" onclick="gFocus()" id="image"></center>
  <form name="form" action="" method="post">
  <div class="textbox"><input style=back type="text" autofocus="autofocus" name="RFID" id="RFID" class="rfidtxt">
  </div>
  </div>
</body>
</html>
