<?php
$conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
  }
else{
   echo "Connected Succesfully";
} 

$sql1 = 'SELECT btnval FROM btnstatus';
  $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
    
        while($row1 = $result1->fetch_assoc()) {
            $btnval = $row1['btnval'];

        }
    }
  $color = "blue";
  if(isset($_POST['override'])){
      if ($btnval == 0){
          $sql2 = "UPDATE btnstatus SET btnval = 1";
          $color = "green";

      }else{
          $sql2 = "UPDATE btnstatus SET btnval = 0";
          $color = "red";

      }
      if(mysqli_query($conn, $sql2)){
        
      } else {
        echo 'query error: '. mysqli_error($conn);
      }
  }
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 	<title>titel</title>
 </head>
 <body> 
 <form method = "POST" action = "index.php">
  <input class="<?php echo $color?> btn" value = "Override" name ="override" type ="submit">
  </form>
 </body>
 </html>