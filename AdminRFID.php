<?php
function RFIDREAD($rfid) {
  $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
  $sql = "SELECT RFID FROM users WHERE RFID='{$rfid}' AND Status=3 ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if (!empty($row['RFID'])) {
    if ($row['RFID'] == $rfid){
    header("Location: adminpage.php");
  } 
  } else {
    header("Location: AdminRFID.php");
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
  <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Private RFID Scan</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
}
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
    font-family: sans-serif;
    background: url() no-repeat;
    background-size: cover;
    background-color: white;
}
body {
  overflow: hidden; /* Hide scrollbars */
}
.textbox {
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
  
}</style>
<body>
  <center> <h1 style= "font-family: sans; color:black;">Please tap ID on scanner</h1> </center>
  <div class="row"></div>
  <div class="row"></div>
  <center><img src="images/RFID1.png"
      width="450"
      height="450"></center>
  <form name="form" action="" method="post">
  <div class="textbox"><input style=back type="text" autofocus="autofocus" name="RFID" id="RFID">
  </div>
  
</body>
</html>