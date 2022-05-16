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
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;

   }
	</style>
	<title>User List</title>
</head>
<body>
	  <nav>
    <div  style="background-color: lightskyblue" class="nav-wrapper">
      <a href="carousel.php"> <img class="navbar-logo" src="Images/vendaidbgblack.png"> </a>
      <a href="useroption.php" style= "color:black; font-weight: bold;" href="#" class="brand-logo">User List</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a style= "background-color: #0096FF; color:#e8effa; font-weight: bold;" href="Userlist.php">User List</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddUser.php">Add User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateuserRFID.php">Update User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddProduct.php">Add Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateproduct.php">Update Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PrivateSales.php">Private Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PublicSales.php">Public Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="Inventory.php">Inventory</a></li>
      </ul>
    </div>
  </nav>
  <?php $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
$sql = "SELECT ID, FIRST_NAME, LAST_NAME, STATUS, RFID, Balance FROM users";
$result = $conn->query($sql);

echo "<font color=black> <table border='1'>

<tr>

<th>ID</th>

<th>First name</th>

<th>Last Name</th>

<th>Status</th>

<th>RFID</th>

<th>Balance</th>

</tr>";

while($row = $result->fetch_assoc())
  {

  echo "<tr>";

  echo "<td>" . $row['ID'] . "</td>";

  echo "<td>" . $row['FIRST_NAME'] . "</td>";

  echo "<td>" . $row['LAST_NAME'] . "</td>";

  echo "<td>" . $row['STATUS'] . "</td>";

  echo "<td>" . $row['RFID'] . "</td>";

  echo "<td>" . $row['Balance'] . "</td>";


  echo "</tr>";

  }

echo "</table>";

?>
</body>
</html>