<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;


    }

    p {
      margin-top: 10px;
      margin-left: 1%;
      font-weight: bold;
      font-size: 2em;
    }
    
    table {
      margin: 5px;
      width: 50%;
    }

	</style>
	<title>Admin Navigation Bar</title>
</head>
<body>
	  <nav>
    <div style="background-color: lightskyblue" class="nav-wrapper">
      <a href="carousel.php"> <img class="navbar-logo" src="Images/vendaidbgblack.png"> </a>
      <a href="useroption.php" href="#" class="brand-logo">Admin</a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a style= "background-color: lightskyblue; color:black;" href="Userlist.php">User List</a></li>
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
    <p> Current Inventory:</p>
  <?php $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
$sql = "SELECT ID, name, Qty FROM inventory";
$result = $conn->query($sql);

echo "<font color=Black> <table border='1'>

<tr>

<th>ID</th>

<th>Name</th>

<th>Qty</th>

</tr>";

while($row = $result->fetch_assoc())
  {

  echo "<tr>";

  echo "<td>" . $row['ID'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['Qty'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

?>


</body>
</html>
