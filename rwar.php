<?php 
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
	$result = $conn->query($sql);
}
if ($num1['Gauze_Pad'] == 1){
	$sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=2";
	$result = $conn->query($sql);
}

if ($num2['Tape'] == 1){
	$sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=3";
	$result = $conn->query($sql);
}

if ($num3['Betadine'] == 1){
	$sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=4";
	$result = $conn->query($sql);
}

if ($num4['Cotton'] == 1){
	$sql = "UPDATE inventory SET Qty= Qty - 1 WHERE id=5";
	$result = $conn->query($sql);
}




 ?>