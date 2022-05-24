<?php

function updater($name,$Qty){
    // Create connection
    $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
    $value =mysqli_real_escape_string($conn,$name);
    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    $sql = "INSERT INTO inventory (`Name`, `Qty`) VALUES ('{$name}','{$Qty}')";
    if ($conn->query($sql) === TRUE) {
        
    } else {
        
    }
    $conn->close();
}   
    if (isset($_POST['name']))
        updater($_POST['name'],$_POST['Qty'])

?>

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
    .button {
 border-radius: 20px;
    border: 1px solid #74ABFF;
    background-color: #74ABFF;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

.row {
      margin: 5px;
      margin-left: 2%;
    }
 .headertitle{
margin-left: 2%;
font-weight: bold;
    }
   .headersub{
margin-left: 2%;
    }
  </style>
    <title>Add Product</title>
</head>
<body>
      <nav>
    <div  style="background-color: lightskyblue" class="nav-wrapper">
      <a href="carousel.php"><img  class="navbar-logo" src="Images/vendaidbgblack.png"> </a>
      <a href="useroption.php" style= "color:black; font-weight: bold;" href="#" class="brand-logo">Add Product</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style= "background-color: lightskyblue; color:black;" href="Userlist.php">User List</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="AddUser.php">Add User</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateuserRFID.php">Update User</a></li>
        <li class="active"><a style= "background-color: #0096FF; color:#e8effa; font-weight: bold;" href="AddProduct.php">Add Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="updateproduct.php">Update Product</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PrivateSales.php">Private Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="PublicSales.php">Public Sales</a></li>
        <li><a style= "background-color: lightskyblue; color:black;" href="Inventory.php">Inventory</a></li>
      </ul>
    </div>
  </nav>

 <h4 class="headertitle">  Add Product </h4>
  <p class="headersub">  Add a New Product to List </p>

 <div class="row">
    <form style="height:500px;width:500px;" class="col s12" action="" method="post">
      <div class="row">
        <div class="row"></div>
        <div class="input-field col s6">
          <input id="Productname" name="name" type="text" style="color: black;" class="validate">
          <label for="Productname">Name of Product</label>
        </div>
        <div class="input-field col s6">
          <input id="Qty" type="text" name="Qty" style="color: black;" class="validate">
          <label for="Qty">Quantity</label>
        <input class="button" type="submit"/><br/>

        </div>
        <div class="row"></div>
      </div>
  </div>



</body>
</html>
