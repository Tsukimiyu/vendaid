<?php 
$conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
$sql ="SELECT * FROM btnstatus";
$result3 = $conn->query($sql);
if($result3 ->num_rows > 0){
    while($row = $result3->fetch_assoc()) {
    echo $row ["btnval"]. ",";
  }
}
 ?>