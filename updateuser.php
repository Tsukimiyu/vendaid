<?php
$rfid = $_GET['rfid'];

$conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');

$sql1 = "SELECT FIRST_NAME FROM USERS WHERE RFID='{$rfid}'";
$result1 = $conn->query($sql1);
$firstname = $result1->fetch_assoc();

$sql2 = "SELECT LAST_NAME FROM USERS WHERE RFID='{$rfid}'";
$result2 = $conn->query($sql2);
$lastname = $result2->fetch_assoc();

$sql3 = "SELECT Status FROM USERS WHERE RFID='{$rfid}'";
$result3 = $conn->query($sql3);
$status = $result3->fetch_assoc();

$sql5 = "SELECT Balance FROM USERS WHERE RFID='{$rfid}'";
$result5 = $conn->query($sql5);
$balance = $result5->fetch_assoc();

$sql6 = "SELECT ID FROM USERS WHERE RFID='{$rfid}'";
$result6 = $conn->query($sql6);
$id = $result6->fetch_assoc();

$sql4 = "SELECT RFID FROM USERS WHERE RFID='{$rfid}'";
$result4 = $conn->query($sql4);
$rfid = $result4->fetch_assoc();


function updater($value,$id,$lastname,$status,$rfid,$balance){
    // Create connection
    $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
    $value =mysqli_real_escape_string($conn,$value);
    $id =mysqli_real_escape_string($conn,$id);
    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    $sql = "UPDATE users SET FIRST_NAME='{$value}',LAST_NAME='{$lastname}',Status='{$status}',RFID='{$rfid}',Balance='{$balance}' WHERE id='{$id}'";
    if ($conn->query($sql) === TRUE) {
        
    } else {
       
    }
    $conn->close();

    header("Location: adminpage.php");
}   
    if (isset($_POST['name']))
        updater($_POST['name'],$_POST['id'],$_POST['lastname'],$_POST['status'],$_POST['rfid'],$_POST['balance'])

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
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			background-color: white;
      font-family: sans;
	</style>
    <style>
    .button {
    width: 100%;
    padding: 8px;
    color: black;
    background: none lightskyblue;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
  </style>
	<title>Update User</title>
</head>
<body>
	  <nav>
    <div  style="background-color: lightskyblue" class="nav-wrapper">
      <a href="useroption.php" style= "color:black;" href="#" class="brand-logo">Update User</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style= "background-color: lightskyblue; color:black;" href="Userlist.php">User List</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddUser.php">Add User</a></li>
        <li class="active"><a style= "background-color: #0096FF; color:black;" href="updateuser.php">Update User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddProduct.php">Add Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateproduct.php">Update Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PrivateSales.php">Private Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PublicSales.php">Public Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="Inventory.php">Inventory</a></li>
      </ul>
    </div>
  </nav>
 <div class="row">
    <form style="height:500px;width:500px;" class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="id" name="id" style="color: black;" type="text" value="<?php echo $id['ID']?>" class="validate" required>
          <label for="id">ID</label>
        </div>
        <div class="row"></div>
        <div class="input-field col s6">
          <input id="first_name" name="name" type="text" style="color: black;" value="<?php echo $firstname['FIRST_NAME']?>" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="lastname" type="text" style="color: black;"  class="validate" value="<?php echo $lastname['LAST_NAME']?>" required>
          <label for="last_name">Last Name</label>
        </div>
        <div class="row"></div>
        <div class="input-field col s6">
          <input id="status" type="text" name="status" style="color: black;" class="validate" value="<?php echo $status['Status']?>" required>
          <label for="status">Status</label>
        </div>
        <div class="row"></div>
        <div class="input-field col s6">
          <input id="rfid" type="text" name="rfid" style="color: black;" class="validate" value="<?php echo $rfid['RFID']?>" required>
          <label for="rfid">Rfid</label>
          
        </div>
         <div class="row"></div>
        <div class="input-field col s6">
          <input id="balance" type="text" name="balance"style="color: black;" class="validate" value="<?php echo $balance['Balance']?>" required>
          <label for="balance">Balance</label>
        <input class="button" type="submit" /><br/>

        </div>
        <div class="row"></div>

      </div>
  </div>

<script type="text/javascript">
myFunction(x){
document.getElementById('id').value = x;
}</script>

<script type="text/javascript">
myFunction(x){
document.getElementById('first_name').value = x;
}</script>

<script type="text/javascript">
myFunction(x){
document.getElementById('last_name').value = x;
}</script>

<script type="text/javascript">
myFunction(x){
document.getElementById('status').value = x;
}</script>

<script type="text/javascript">
myFunction(x){
document.getElementById('rfid').value = x;
}</script>

<script type="text/javascript">
myFunction(x){
document.getElementById('balance').value = x;
}</script>
</body>
</html>