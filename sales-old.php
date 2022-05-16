<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			background-color: #262626;
	</style>
	<title>Sales Report</title>
</head>
<body>
	  <nav>
    <div  class="nav-wrapper">
      <a style= "color:Tomato;" href="#" class="brand-logo">Admin Sales</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style= "color:Tomato;" href="AddUser.php">Add User</a></li>
        <li><a style= "color:Tomato;" href="updateuser.php">Update User</a></li>
        <li class="active"><a style= "color:Tomato;" href="Sales.php">Sales</a></li>
        <li><a style= "color:Tomato;" href="Inventory.php">Inventory</a></li>
      </ul>
    </div>
  </nav>
  <table class="white-text" class="striped">
        <thead>
          <tr >
              <th>Name</th>
              <th>Alcohol</th>
              <th>Gause Pad</th>
              <th>Tape</th>
              <th>Betadine</th>
              <th>Cotton</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>₱100</th>
          </tr>
          <tr>
            <td>Alan</td>
            <th>1</th>
            <th>0</th>
            <th>1</th>
            <th>0</th>
            <th>1</th>
            <th>₱60</th>
          </tr>
          <tr>
            <td>Jonathan</td>
            <th>1</th>
            <th>1</th>
            <th>0</th>
            <th>0</th>
            <th>0</th>
            <th>₱40</th>
          </tr>
        </tbody>
      </table>
</body>
</html>