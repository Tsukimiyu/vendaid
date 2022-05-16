<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Private</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      background-color: #262626;
  </style>
  <style>
    .button {
    width: 100%;
    padding: 8px;
    color: black;
    background: none tomato;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
  </style>
</head>
<body>
  <?php
      
        if(isset($_POST['button1'])) {
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "INSERT INTO testing (`name`, `Qty`) VALUES ('Alcohol',1);";
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button2'])) {
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "INSERT INTO testing (`name`, `Qty`) VALUES ('Gauze Pad',1);";
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button3'])) {
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "INSERT INTO testing (`name`, `Qty`) VALUES ('Tape',1);";
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button4'])) {
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "INSERT INTO testing (`name`, `Qty`) VALUES ('Betadine',1);";
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button5'])) {
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "INSERT INTO testing (`name`, `Qty`) VALUES ('Cotton',1);";
            mysqli_query($conn, $query); 
        }
    ?>
  <center> <h1 style= "color:Tomato;">Select Products</h1> </center>
  <div class="row"></div>
  <div class="row"></div>
   <div class="row">
    <div class="col s1"></div>
    <div class="col s2 center">
      <div class="card">
        <div class="card-image">
          <img src="images/alcohol.png">
        </div>
        <div class="card-content white">
          <p style="background-color:white;">Alcohol
          </p>
        </div>
        <form method="post"><input class="button" type="submit" name="button1" value="Add to cart"></form>
      </div>
      </div>
    <div class="col s2 center">
      <div class="card">
        <div class="card-image">
          <img src="images/alcohol.png">
        </div>
        <div class="card-content white">
          <p style="background-color:white;">Gause Pad
          </p>
        </div>
        <form method="post"><input class="button" type="submit" name="button2" value="Add to cart"></form>
    </div>
    </div>

    <div class="col s2 center">
      <div class="card">
        <div class="card-image">
          <img src="images/alcohol.png">
        </div>
        <div class="card-content white">
          <p style="background-color:white;">Tape
          </p>
        </div>
        <form method="post"><input class="button" type="submit" name="button3" value="Add to cart"></form>
    </div>
    </div>

    <div class="col s2 center">
      <div class="card">
        <div class="card-image">
          <img src="images/alcohol.png">
        </div>
        <div class="card-content white">
          <p style="background-color:white;">Betadine
          </p>
        </div>
        <form method="post"><input class="button" type="submit" name="button4" value="Add to cart"></form>
    </div>
    </div>
    <div class="col s2 center">
      <div class="card">
        <div class="card-image">
          <img src="images/alcohol.png">
        </div>
        <div class="card-content white">
          <p style="background-color:white;">Cotton
          </p>
        </div>
        <form method="post"><input class="button" type="submit" name="button5" value="Add to cart"></form>
    </div>
    </div>
    </div>

</body>
</html>