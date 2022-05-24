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
.element::-webkit-scrollbar { 
  width: 0 !important 
}
    .cont1{
      margin-left: 2%;
    }
.table1 {
width: 40%;
}
  .headertitle, .headersub{
font-weight: bold;
padding: 0px;
    }
    .headersub {
      color: #74ABFF;
      font-size: 1.5em;
    }
    table {
      margin: 5px;
      width: 80%;
    }

   th, td {
      padding: 10px;
    }

.title1{
  color: black;
}
	</style>
	<title>Admin Dashboard </title>
</head>
<body>
	  <nav>
    <div style="background-color: lightskyblue" class="nav-wrapper">
      <a href="carousel.php"> <img class="navbar-logo" src="Images/vendaidbgblack.png"> </a>
      <a href="#" class="brand-logo"><p class="title1"> Dashboard </p></a>

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

  <div class="cont1">
    <h4 class="headertitle"> Welcome back, admin! </h4>
<p style="font-size: 1.5em;"> While you were away... </p>
<div class="row"></div>

 <p class="headersub"> Latest Private Sales: </p>
  <?php $conn1 = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
$sql = "SELECT FIRST_NAME, LAST_NAME, Alcohol, Gauze_pad, Tape, Betadine, Cotton, Date FROM privatesales ORDER BY Date DESC LIMIT 5";
$result = $conn1->query($sql);

echo "<font color=Black> <table border='1' class='table2'>

<tr>

<th>First Name</th>

<th>Last Name</th>

<th>Alcohol</th>

<th>Gauze Pad</th>

<th>Tape</th>

<th>Betadine</th>

<th>Cotton</th>

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

  echo "<td>" . $row['Date'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

?> 

 <p class="headersub"> Latest Public Sales: </p>

  <?php $conn1 = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
$sql = "SELECT FIRST_NAME, LAST_NAME, Alcohol, Gauze_pad, Tape, Betadine, Cotton, Date FROM publicsales ORDER BY Date DESC LIMIT 5";
$result = $conn1->query($sql);

echo "<font color=Black> <table border='1' class='table2'>

<tr>

<th>First Name</th>

<th>Last Name</th>

<th>Alcohol</th>

<th>Gauze Pad</th>

<th>Tape</th>

<th>Betadine</th>

<th>Cotton</th>

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

  echo "<td>" . $row['Date'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

?> 
</div>
</body>
</html>
