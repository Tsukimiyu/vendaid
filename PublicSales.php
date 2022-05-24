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
table {
      margin: 5px;
      margin-left: 2%;
      width: 80%;
    }
 .headertitle{
margin-left: 2%;
font-weight: bold;
    }
   .headersub{
margin-left: 2%;
    }
	</style>
	<title>Public Sales Report</title>
</head>
<body>
	  <nav>
   <div  style="background-color: lightskyblue" class="nav-wrapper">
    <a href="carousel.php"><img  class="navbar-logo" src="Images/vendaidbgblack.png"> </a>
      <a href="useroption.php" style= "color:black; font-weight: bold;" href="#" class="brand-logo">Public Sales</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style= "background-color: lightskyblue; color:black; " href="Userlist.php">User List</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddUser.php">Add User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateuserRFID.php">Update User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddProduct.php">Add Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateproduct.php">Update Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PrivateSales.php">Private Sales</a></li>
        <li class="active"><a style= "background-color: #0096FF; color:#e8effa; font-weight: bold;" href="PublicSales.php">Public Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="Inventory.php">Inventory</a></li>
      </ul>
    </div>
  </nav>

 <h4 class="headertitle">  Public Sales </h4>
  <p class="headersub">  Report for Public Sales </p>

    <div class="table_public">
  <?php $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
$sql = "SELECT FIRST_NAME, LAST_NAME, Alcohol, Gauze_pad, Tape, Betadine, Cotton, Total, Date FROM publicsales ORDER BY ID DESC";
$result = $conn->query($sql);

echo "<font color=Black> <table border='1'>

<tr>

<th>First Name</th>

<th>Last Name</th>

<th>Alcohol</th>

<th>Gauze Pad</th>

<th>Tape</th>

<th>Betadine</th>

<th>Cotton</th>

<th>Total</th>

<th>Date</th>

</tr>";

while($row = $result->fetch_assoc())
  {

  echo "<tr>";

  echo "<td>" . $row['FIRST_NAME'] . "</td>";

  echo "<td>" . $row['LAST_NAME'] . "</td>";

  echo "<td>" . $row['Alcohol'] . "</td>";

  echo "<td>" . $row['Gauze_pad'] . "</td>";

  echo "<td>" . $row['Tape'] . "</td>";

  echo "<td>" . $row['Betadine'] . "</td>";

  echo "<td>" . $row['Cotton'] . "</td>";

  echo "<td>" . "₱" . $row['Total'] . "</td>";

  echo "<td>" . $row['Date'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

?>

</div>
</body>
</html>
