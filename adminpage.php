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

  .headertitle{
margin-left: 2%;
font-weight: bold;
padding: 0px;
    }
   .headersub{
margin-left: 2%;
    }
    table {
      margin: 5px;
      width: 40%;
    }

	</style>
	<title>Admin Dashboard </title>
</head>
<body>
	  <nav>
    <div style="background-color: lightskyblue" class="nav-wrapper">
      <a href="carousel.php"> <img class="navbar-logo" src="Images/vendaidbgblack.png"> </a>
      <a href="#" class="brand-logo">Admin Dashboard</a>

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
    <h4 class="headertitle"> Welcome back, admin! </h4> 
    
</body>
</html>
