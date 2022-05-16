<?php 
$rfid = $_GET['rfid'];

$conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');

$sql1 = "SELECT FIRST_NAME FROM USERS WHERE RFID='{$rfid}'";
$result1 = $conn->query($sql1);
$firstname = $result1->fetch_assoc();

$sql2 = "SELECT LAST_NAME FROM USERS WHERE RFID='{$rfid}'";
$result2 = $conn->query($sql2);
$lastname = $result2->fetch_assoc();

$sql = "INSERT INTO orderslip (`ID`, `FIRST_NAME`, `LAST_NAME`) VALUES (1,'{$firstname['FIRST_NAME']}','{$lastname['LAST_NAME']}')";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<title>Private</title>
  <style>
    .modal { max-height: 100%; overflow: visible}
  </style>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			background-color: white;
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
  <style type="text/css">
        #snackbar {
          visibility: hidden; /* Hidden by default. Visible on click */
          min-width: 250px; /* Set a default minimum width */
          margin-left: -125px; /* Divide value of min-width by 2 */
          background-color: #333; /* Black background color */
          color: #fff; /* White text color */
          text-align: center; /* Centered text */
          border-radius: 2px; /* Rounded borders */
          padding: 16px; /* Padding */
          position: fixed; /* Sit on top of the screen */
          z-index: 1; /* Add a z-index if needed */
          left: 50%; /* Center the snackbar */
          bottom: 30px; /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
          visibility: visible; /* Show the snackbar */
          /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
          However, delay the fade out process for 2.5 seconds */
          -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
          animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
          from {bottom: 0; opacity: 0;}
          to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
          from {bottom: 0; opacity: 0;}
          to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
          from {bottom: 30px; opacity: 1;}
          to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
          from {bottom: 30px; opacity: 1;}
          to {bottom: 0; opacity: 0;}
        }
    </style>
</head>
<body>
  <?php
      
        if(isset($_POST['button1'])) {
            usleep(500000);
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "UPDATE orderslip SET Alcohol= 1 WHERE id='1'";
            $query1 = "INSERT INTO testing (`name`, `Qty`) VALUES ('Alcohol',1);";
            mysqli_query($conn, $query1);
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button2'])) {
            usleep(500000);
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "UPDATE orderslip SET Gauze_Pad= 1 WHERE id='1'";
            $query1 = "INSERT INTO testing (`name`, `Qty`) VALUES ('Gauze Pad',1);";
            mysqli_query($conn, $query1);
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button3'])) {
            usleep(500000);
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "UPDATE orderslip SET Tape = 1 WHERE id='1'";
            $query1 = "INSERT INTO testing (`name`, `Qty`) VALUES ('Tape',1);";
            mysqli_query($conn, $query1);
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button4'])) {
            usleep(500000);
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "UPDATE orderslip SET Betadine= 1 WHERE id='1'";
            $query1 = "INSERT INTO testing (`name`, `Qty`) VALUES ('Betadine',1);";
            mysqli_query($conn, $query1);
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button5'])) {
            usleep(500000);
            $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
            $query = "UPDATE orderslip SET Cotton = 1 WHERE id='1'";
            $query1 = "INSERT INTO testing (`name`, `Qty`) VALUES ('Cotton',1);";
            mysqli_query($conn, $query1);
            mysqli_query($conn, $query); 
        }
        if(isset($_POST['button7'])){
          $sql7 = "DELETE FROM orderslip WHERE id=1";
          $result7 = $conn->query($sql7);

          $sql8 = "TRUNCATE TABLE testing";
          $result8 = $conn->query($sql8);

          header("Location: carousel.php");

          
        if(isset($_POST['button6'])){
          if ($result = $conn->query("SELECT * FROM `testing` LIMIT 1"))
          {

              if ($obj = $result->fetch_object())
              {

                  $date = date('Y-m-d H:i:s');
                  $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
                  $sq1 = "SELECT Alcohol FROM orderslip WHERE id=1";
                  $resut1 = $conn->query($sq1);
                  $num = $resut1->fetch_assoc();

                  $sq5 = "SELECT Gauze_Pad FROM orderslip WHERE id=1";
                  $resut5 = $conn->query($sq5);
                  $num1 = $resut5->fetch_assoc();

                  $sq2 = "SELECT Tape FROM orderslip WHERE id=1";
                  $resut2 = $conn->query($sq2);
                  $num2 = $resut2->fetch_assoc();

                  $sq3 = "SELECT Betadine FROM orderslip WHERE id=1";
                  $resut3 = $conn->query($sq3);
                  $num3 = $resut3->fetch_assoc();

                  $sq4 = "SELECT Cotton FROM orderslip WHERE id=1";
                  $resut4 = $conn->query($sq4);
                  $num4 = $resut4->fetch_assoc();

                  if ($num['Alcohol'] == 1){
                    $sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=1";
                    $sql1 = "UPDATE btnstatus SET btnval= 1 WHERE id=1";
                    $result1 = $conn->query($sql1);
                    $result = $conn->query($sql);
                  }
                  if ($num1['Gauze_Pad'] == 1){
                    $sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=2";
                    $sql1 = "UPDATE btnstatus SET btnval= 1 WHERE id=2";
                    $result1 = $conn->query($sql1);
                    $result = $conn->query($sql);
                  }

                  if ($num2['Tape'] == 1){
                    $sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=3";
                    $sql1 = "UPDATE btnstatus SET btnval= 1 WHERE id=3";
                    $result1 = $conn->query($sql1);
                    $result = $conn->query($sql);
                  }

                  if ($num3['Betadine'] == 1){
                    $sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=4";
                    $sql1 = "UPDATE btnstatus SET btnval= 1 WHERE id=4";
                    $result1 = $conn->query($sql1);
                    $result = $conn->query($sql);
                  }

                  if ($num4['Cotton'] == 1){
                    $sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=5";
                    $sql1 = "UPDATE btnstatus SET btnval= 1 WHERE id=5";
                    $result1 = $conn->query($sql1);
                    $result = $conn->query($sql);
                  }
                  
                  $sql1 = "SELECT Alcohol FROM orderslip WHERE id=1";
                  $result1 = $conn->query($sql1);
                  $alcohol = $result1->fetch_assoc();

                  $sql2 = "SELECT Gauze_Pad FROM orderslip WHERE id=1";
                  $result2 = $conn->query($sql2);
                  $gauze = $result2->fetch_assoc();

                  $sql3 = "SELECT Tape FROM orderslip WHERE id=1";
                  $result3 = $conn->query($sql3);
                  $tape = $result3->fetch_assoc();

                  $sql4 = "SELECT Betadine FROM orderslip WHERE id=1";
                  $result4 = $conn->query($sql4);
                  $betadine = $result4->fetch_assoc();

                  $sql5 = "SELECT Cotton FROM orderslip WHERE id=1";
                  $result5 = $conn->query($sql5);
                  $cotton = $result5->fetch_assoc();

                  $sql6 = "INSERT INTO privatesales 
                  (`FIRST_NAME`, `LAST_NAME`, `Alcohol`, `Gauze_Pad`, `Tape`, `Betadine`, `Cotton`, `Date`)
                   VALUES ('{$firstname['FIRST_NAME']}','{$lastname['LAST_NAME']}', '{$alcohol['Alcohol']}', '{$gauze['Gauze_Pad']}', '{$tape['Tape']}', '{$betadine['Betadine']}', '{$cotton['Cotton']}', now() )";
                  $result6 = $conn->query($sql6);

                  $sql7 = "DELETE FROM orderslip WHERE id=1";
                  $result7 = $conn->query($sql7);

                  $sql8 = "TRUNCATE TABLE testing";
                  $result8 = $conn->query($sql8);

                  header("Location: thankyou.php");
              }
              else
              {
                echo '<script>alert("Cart is empty!")</script>';        

              }


        }    
              $result->close();
          }

          
        }
    ?>
	<center> <h1 style= "font-family: sans; color:Black">Select Products, <?php echo $firstname['FIRST_NAME'] ?> </h1> </center>
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
        <?php
        $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
        $sqlcheck = "SELECT name FROM testing WHERE name='Alcohol' ";
        $check = $conn->query($sqlcheck);
        $checkname = $check->fetch_assoc();
        if (empty($checkname['name'])) {
        echo "<form method='post'><input class='button' onclick='myFunction()' type='submit' name='button1' value='Add to cart'></form>";
      } else {
        echo "<form method='post'><input class='button' style ='background-color:red;' disabled='disabled' type='submit' name='button1' value='Already in Cart' disabled></form>";
           } 
         ?>
        
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
        <?php
        $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
        $sqlcheck = "SELECT name FROM testing WHERE name='Gauze Pad' ";
        $check = $conn->query($sqlcheck);
        $checkname = $check->fetch_assoc();
        if (empty($checkname['name'])) {
        echo "<form method='post'><input class='button' onclick='myFunction()' type='submit' name='button2' value='Add to cart'></form>";
      } else {
        echo "<form method='post'><input class='button' style ='background-color:red;' disabled='disabled' type='submit' name='button1' value='Already in Cart' disabled></form>";
           } 
         ?>
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
        <?php
        $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
        $sqlcheck = "SELECT name FROM testing WHERE name='Tape' ";
        $check = $conn->query($sqlcheck);
        $checkname = $check->fetch_assoc();
        if (empty($checkname['name'])) {
        echo "<form method='post'><input class='button' onclick='myFunction()' type='submit' name='button3' value='Add to cart'></form>";
      } else {
        echo "<form method='post'><input class='button' style ='background-color:red;' disabled='disabled' type='submit' name='button1' value='Already in Cart' disabled></form>";
           } 
         ?>
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
        <?php
        $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
        $sqlcheck = "SELECT name FROM testing WHERE name='Betadine' ";
        $check = $conn->query($sqlcheck);
        $checkname = $check->fetch_assoc();
        if (empty($checkname['name'])) {
        echo "<form method='post'><input class='button' onclick='myFunction()' type='submit' name='button4' value='Add to cart'></form>";
      } else {
        echo "<form method='post'><input class='button' style ='background-color:red;' disabled='disabled' type='submit' name='button1' value='Already in Cart' disabled></form>";
           } 
         ?>
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
        <?php
        $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
        $sqlcheck = "SELECT name FROM testing WHERE name='Cotton' ";
        $check = $conn->query($sqlcheck);
        $checkname = $check->fetch_assoc();
        if (empty($checkname['name'])) {
        echo "<form method='post'><input class='button' onclick='myFunction()' type='submit' name='button5' value='Add to cart'></form>";
      } else {
        echo "<form method='post'><input class='button' style ='background-color:red;' disabled='disabled' type='submit' name='button1' value='Already in Cart' disabled></form>";
           } 
         ?>
    </div>
    </div>
  	</div>

<div class="container">
    <button style="background-color: lightskyblue; color: #262626;" class="btn modal-trigger" data-target="terms">Cart
    </button>
  <div style="background-color: white;" class="modal" id="terms">
    <div style="background-color: white; color: black;" class="modal-content">
      <h3>Cart</h3>
      <p><?php $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
        $sql = "SELECT id, name, Qty FROM testing";
        $result = $conn->query($sql);
        $money = 0;
        echo "<font color=#262626> <table style='width:100%' border='1'>

        <tr>

        <th>Name</th>

        <th>Qty</th>

        </tr>";
  
        while($row = $result->fetch_assoc())
          {

          echo "<tr>";

          echo "<td>" . $row['name'] . "</td>";

          echo "<td>" . $row['Qty'] . "</td>";

          echo "<td><a href='removetest.php?id=".$row['id']."'>Remove From Cart</a></td>";

          echo "</tr>";
          $money = $money + $row['Qty'];
          }

          echo "<tr>";

          echo "<td>total</td>";

          echo "<td>" . $money . "</td>";

          echo "</tr>";

          echo "</table>";

          ?></p>
    </div>
    <div style="background-color: white;" class="modal-footer">
      <form method="post">
      <button class="btn teal  modal-close">Cancel</button>
      <input style="background-color: lightskyblue;" width="50%" type="submit" name="button6" value="Checkout" class="btn"></input>
      </form>  
    </div>
  </div>
  </div>
  <div class="col s3"> <form method='post'><input class='button' style="width: 10%;" type='submit' name='button7' value='Cancel'></form></div>
  <div id="snackbar">Added to cart!</div>
<script src="js/materialize.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded",function(){
    const box = document.querySelector(".modal");
    M.Modal.init(box,{});
  });
  </script>
  <script type="text/javascript">
    function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</body>
</html>