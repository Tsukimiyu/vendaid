<?php 
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'gypsy', 'admin', 'database');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record

$sql1 = "SELECT name FROM testing WHERE id=$id";
$result1 = $conn->query($sql1);
$name = $result1->fetch_assoc();

if ($name['name'] == "Alcohol") {
    $sql2 = "UPDATE orderslip SET Alcohol = 0 WHERE id=1";
    $result2= $conn->query($sql2);
}
if ($name['name'] == "Gauze Pad") {
    $sql2 = "UPDATE orderslip SET Gauze_Pad = 0 WHERE id=1";
    $result2= $conn->query($sql2);
}
if ($name['name'] == "Tape") {
    $sql2 = "UPDATE orderslip SET Tape = 0 WHERE id=1";
    $result2= $conn->query($sql2);
}
if ($name['name'] == "Betadine") {
    $sql2 = "UPDATE orderslip SET Betadine = 0 WHERE id=1";
    $result2= $conn->query($sql2);
}
if ($name['name'] == "Cotton") {
    $sql2 = "UPDATE orderslip SET Cotton = 0 WHERE id=1";
    $result2= $conn->query($sql2);
}
$sql = "DELETE FROM testing WHERE id = $id"; 
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: ' . $_SERVER["HTTP_REFERER"] ); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

 ?>