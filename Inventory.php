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
  color: #74ABFF;
margin-left: 2%;
font-weight: bold;
    }
    th {
      color: #74ABFF;
    }
   .headersub{
margin-left: 2%;
    }

  </style>
  <title>Inventory</title>
</head>
<body>
    <nav>
    <div  style="background-color: lightskyblue" class="nav-wrapper">
     <a href="carousel.php"><img  class="navbar-logo" src="Images/vendaidbgblack.png"> </a>
      <a href="useroption.php" style= "color:black; font-weight: bold;" href="#" class="brand-logo">Inventory</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style= "background-color: lightskyblue; color:black;" href="Userlist.php">User List</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddUser.php">Add User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateuserRFID.php">Update User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddProduct.php">Add Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateproduct.php">Update Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PrivateSales.php">Private Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PublicSales.php">Public Sales</a></li>
        <li class="active"><a style= "background-color: #0096FF; color:#e8effa; font-weight: bold;" href="Inventory.php">Inventory</a></li>
      </ul>
    </div>
  </nav>

 <h4 class="headertitle">  Inventory </h4>
  <p class="headersub"> Current Inventory Status</p>
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