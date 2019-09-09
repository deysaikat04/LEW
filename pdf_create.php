<?php
require('fpdf.php');



class PDF extends FPDF
{
// Page header
function design()
{
    // Logo
    //$this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetMargins(40, 35, 20);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
   	$this->Cell(20,10,'TAX INVOICE',0,0,'C');

   	$this->SetFont('Arial','',9);
   	$this->Cell(60);
   	$this->Cell(30,10,'Mob: 9830869788 / 9830869788',0,0,'R');
    // Line break
    $this->Ln(4);
    $this->SetFont('Arial','',10);
    $this->Cell(50);
   $this->Cell(20,10,'TRANSPORT COPY',0,1,'C'); //  -------------------------database

   // Line break
    $this->Ln(-2);
    $this->SetFont('Arial','',25);
    $this->Cell(57);
   $this->Cell(20,10,'Lakshmi Engineering Works',0,1,'C');
	$this->Ln(-3);
  $this->Image('main.png',12,11,17,13);
	$this->Image('logo_devi.png',12,25,15,22); // Debi image

   // Line break
	//$this->Ln(-3);
    $this->SetFont('Arial','',10);
    $this->Cell(60);
    $text='Engineers, Manufactures, of Pipe Fittings & Machinery Spare Parts and Govt. Suppliers';
   $this->Cell(20,10,$text,0,1,'C');
   $this->Ln(-6);

   // Line break
    $this->SetFont('Arial','',10);
    $this->Cell(60);
    $text2='Office: 105-P, Madhusudan Pal Chowdhury Lane, Howrah- 711 101, West Bengal';
   $this->Cell(20,10,$text2,0,1,'C');
   $this->Ln(-6);

   $this->SetFont('Arial','',10);
    $this->Cell(60);
    $text3='Works: 105-P, Madhusudan Pal Chowdhury Lane, Howrah- 711 101, West Bengal';
   $this->Cell(20,10,$text3,0,1,'C');
   $this->Ln(-6);

   $this->SetFont('Arial','B',10);
    $this->Cell(54);
    $text3='GSTIN: 19AFNPP8016RIZF';
   $this->Cell(20,10,$text3,0,1,'C');
   $this->Ln(-4);
//-----------------1st row----------------
    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3='Tax Invoice No. : LEW/';
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
   $this-> Line(50,54,100,54);

    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3='Date';
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
    $this-> Line(172,54,200,54);

//-----------------2nd row----------------

     $this->Ln(6);
     $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3='Messers';
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
   $this-> Line(27,60,196,60);
   $this->Cell(4.5);
   $this->Cell(0,10,'Dr.',0,0,'L');
   $this-> Line(27,66,200,66);

   //-----------------3rd row----------------

     $this->Ln(11);
     $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3='We have despatched the following goods against.';
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
 
    //-----------------4th row----------------
    $this->Ln(5);
    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3="Party's G.S.T. No.";
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
   $this-> Line(42,76,115,76);

    $this->SetFont('Arial','B',9);
    $this->Cell(-75);
    $text3='Through';
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
    $this-> Line(130,76,200,76);

    //-----------------5th row----------------
    $this->Ln(5);
    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3="LR/RR No.";
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
   $this-> Line(30,81,115,81);

    $this->SetFont('Arial','B',9);
    $this->Cell(-75);
    $text3='Private Mark';
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
    $this-> Line(136,81,200,81);
    
    //-----------------6th row----------------
    $this->Ln(5);
    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3="Documents Through";
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
   $this-> Line(45,86,145,86);

    $this->SetFont('Arial','B',9);
    $this->Cell(-45);
    $text3='No. of Bags';
    $this->Cell(0,10,$text3,0,0,'L');
    //$this->SetX($this->Margin);
    $this-> Line(164,86,200,86);
  



}
// Better table
function ImprovedTable($header)
{
   $this->Ln(8);
   $this->Cell(-27);
    // Column widths
    $w = array(10, 20, 93, 20, 20, 25);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    $con=mysqli_connect("localhost","root","","Invoice");
$query="SELECT * FROM Items";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
    {
      $this->Cell(-27);
        $this->cell($w[0],4,$row[1],'LR');
        $this->cell($w[1],4,$row[2],'LR');
        $this->cell($w[2],4,$row[3],'LR');
        $this->cell($w[3],4,$row[4],'LR');
        $this->cell($w[4],4,$row[5],'LR');
        $this->cell($w[5],4,$row[6],'LR');
        /*$pdf->Cell($w[0],6,$row[0],'LR');
        $pdf->Cell($w[1],6,$row[1],'LR');
        $pdf->Cell($w[2],6,$row[2],'LR',0,'R');
        $pdf->Cell($w[3],6,$row[3],'LR',0,'R');*/
        $this->Ln();
    }
    $this-> Line(10,216,200,216);
    /*foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }*/
    // Closing line
    $this->Cell(array_sum($w),0,'','');
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

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AddPage();
$header = array('Qnty.', 'HSN Code', 'DESCRIPTION', 'Rate', 'Unit', 'Amount');
// Data loading


//$data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',9);
$pdf->design();
$pdf->ImprovedTable($header);
$pdf->Output()
?>