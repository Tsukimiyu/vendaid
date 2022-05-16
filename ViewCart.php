<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
  <style type="text/css">
    *{
      background-color: #262626;
  </style>
  <style>
    .modal-body{
      background-color: #262626;
      color: white;
    }
  </style>
</head>

<style>.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: tomato  !important; color: black !important; border: none !important;
}</style>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Cart
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #262626">
        <h5 class="modal-title" style="background-color: #262626; color: white;" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
        $sql = "SELECT id, name, Qty FROM testing";
        $result = $conn->query($sql);
        $money = 0;
        echo "<font color=white> <table style='width:100%' border='1'>

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

          ?>
      </div>
      <div class="modal-footer" style="background-color: #262626;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>