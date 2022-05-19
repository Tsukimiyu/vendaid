<?php
//include connection file 
include_once("connect.php");
include_once('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/alcohol.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Private Sales',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('ID'=>'ID','FIRST_NAME'=>'First Name', 'LAST_NAME'=> 'Last Name', 'Alcohol'=> 'Alcohol','Gauze_Pad'=> 'Gauze Pad','Tape'=> 'Tape','Betadine'=> 'Betadine','Cotton'=> 'Cotton','Date'=> 'Date',);

$result = mysqli_query($connString, "SELECT ID, FIRST_NAME, LAST_NAME, Alcohol, Gauze_pad, Tape, Betadine, Cotton, Date FROM privatesales") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM privatesales");

$pdf = new PDF('L','mm',array(210,297));
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(30,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(30,10,$column,1);
}
$pdf->Output();
?>
