<?php

function RFIDREAD($rfid) {
  $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
  $sql = "SELECT RFID FROM users WHERE RFID='{$rfid}' AND Status=1 ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if (!empty($row['RFID'])) {
    if ($row['RFID'] == $rfid){
    header("Location: private.php");
  } 
  } else {
    header("Location: RANDOM.php");
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
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      background-color: #262626;
  </style>
  <title></title>
</head>
<style>body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url() no-repeat;
    background-size: cover;
    background-color: #262626;
}
.textbox {
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px #262626;
}
  
.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
    color: #262626;
}
  
}</style>
<body>

<form name="form" action="" method="post">
  <div class="textbox"><input style=back type="text" autofocus="autofocus" name="RFID" id="RFID">
  </div>
  
</form>
</body>
</html>