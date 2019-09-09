<?php
require('fpdf.php');



class PDF extends FPDF
{
// Page header
function design()
{
    $con=mysqli_connect("localhost","root","","ebill");
    $query="SELECT * from parties";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
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
    $this->Cell(30,10,'Mob: 9830869788 / 9830385535',0,0,'R');
    // $this->Ln(-10);
     $this->SetXY(170,13);
    $this->Cell(30,10,'Mail ID: tapanpaul1946@gmail.com',0,0,'R');

    // Line break
    $this->Ln(1);
    $this->SetFont('Arial','',10);
    $this->Cell(50);
    $copy=$row['CopyFor'];
   $this->Cell(12,10,$copy,0,1,'C');$this->Ln(-10);
   $this->Cell(138,10,' Copy',0,1,'C'); //  -------------------------database
   

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
//*****************************************Upper Level Complete******************************************

//-------------------------------------------------Customer Details--------------------------------------------------
//-----------------1st row----------------
    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3='Tax Invoice No. : LEW/';
    $this->Cell(0,10,$text3,0,0,'L');
      // ...........................................data part
      $this->SetFont('Arial','',9);
      $this->Cell(-140);
      $val=$row['InvoiceNo'];
      $this->Cell(0,10,$val,0,0,'L');
      // -------------------------------------------data part
    //$this->SetX($this->Margin);
   $this-> Line(50,54,100,54);

    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3='Date';
    $this->Cell(0,10,$text3,0,0,'L');
     // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-17);
       $val=$row['BillDate'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
    $this-> Line(172,54,200,54);

//-----------------2nd row----------------

     $this->Ln(6);
     $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3='Messers';
    $this->Cell(0,10,$text3,0,0,'L');
       // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-160);
       $val=$row['Messers'];
      $this->Cell(0,10,$val,0,0,'L'); 

      $this->Ln(6);$this->Cell(-10);
      $val=$row['MessersAdd'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
   $this-> Line(27,60,196,60);
   $this->Cell(4.5);
   $this->Cell(0,10,'Dr.',0,0,'L');
   
   $this-> Line(27,66,200,66);

   //-----------------3rd row----------------

     $this->Ln(5);
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
     // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-147);
      $val=$row['GSTNo'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
   $this-> Line(42,76,115,76);

    $this->SetFont('Arial','B',9);
    $this->Cell(-75);
    $text3='Through';
    $this->Cell(0,10,$text3,0,0,'L');
     // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-48);
      $val=$row['Through'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
    $this-> Line(130,76,200,76);

    //-----------------5th row----------------
    $this->Ln(5);
    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3="LR/RR No.";
    $this->Cell(0,10,$text3,0,0,'L');
     // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-152);
      $val=$row['LRRRNo'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
   $this-> Line(30,81,115,81);

    $this->SetFont('Arial','B',9);
    $this->Cell(-75);
    $text3='Private Mark';
    $this->Cell(0,10,$text3,0,0,'L');
     // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-40);
      $val=$row['PrivateMark'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
    $this-> Line(136,81,200,81);
    
    //-----------------6th row----------------
    $this->Ln(5);
    $this->SetFont('Arial','B',9);
    $this->Cell(-28);
    $text3="Documents Through";
    $this->Cell(0,10,$text3,0,0,'L');
     // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-140);
      $val=$row['DocThrough'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
   $this-> Line(45,86,145,86);

    $this->SetFont('Arial','B',9);
    $this->Cell(-45);
    $text3='No. of Bags';
    $this->Cell(0,10,$text3,0,0,'L');
       // -------------------------------------------data part
      $this->SetFont('Arial','',9);
      $this->Cell(-10);
      $val=$row['NoOfBags'];
      $this->Cell(0,10,$val,0,0,'L');
       // -------------------------------------------data part
    //$this->SetX($this->Margin);
    $this-> Line(164,86,200,86);

   } 


}
function ItemsTable($header)
{
   $this->Ln(8);
   $this->Cell(-27);
    $this->SetFont('Arial','B',9);
    // Column widths
    $w = array(10, 20, 93, 20, 20, 25);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();

    //table structure
    $this-> Line(13,94,13,200);//-------------virtical line
    $this-> Line(23,94,23,200);//-------------virtical line
    $this-> Line(43,94,43,200);//-------------virtical line
    $this-> Line(136,94,136,233);//-------------virtical line
    $this-> Line(156,94,156,200);//-------------virtical line
    $this-> Line(176,94,176,200);//-------------virtical line
    $this-> Line(201,94,201,200);//-------------virtical line
      // $this-> Line(201,94,201,200);//---------------------------horizontal line
        $this-> Line(13,200,201,200);
    
    // Data
     $con=mysqli_connect("localhost","root","","ebill");
    $query="SELECT Qnty,HSNCode,Description,Rate,Unit,Amount FROM items";    
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    $i=0;

    
      while($row=mysqli_fetch_array($result))
      {
        if($i<24)
        {
          $this->Cell(-27);
          $this->SetFont('Arial','',9);
          $this->cell($w[0],4,$row['Qnty'],'C');
          $this->cell($w[1],4,$row['HSNCode'],'C');
          $this->cell($w[2],4,$row['Description']);
          $this->cell($w[3],4,$row['Rate'],'C');
          $this->cell($w[4],4,$row['Unit'],'C');
          $this->cell($w[5],4,$row['Amount'],0,0,'R');
          
          $this->Ln();
          $i++;
        }
        else
          break;
      }
    $this->Ln(2);
    $this->Cell(60);
    $this->SetFont('Arial','B',9);
    $this->Cell(0,10,'Packing',0,0,'L');

    $this->Ln(0);
    $query2="SELECT Packing FROM parties";    
    $result2=mysqli_query($con,$query2);
    $row2=mysqli_fetch_array($result2);
    $this->Cell(150);
    $this->SetFont('Arial','',9);
    $this->Cell(0,10,$row2['Packing'],0,0,'L');
  
    // Closing line
    //$this->Cell(array_sum($w),0,'','');
}
function LowerTable($header)
{
    $con=mysqli_connect("localhost","root","","ebill");
    $query2="SELECT * FROM parties";    
    $result2=mysqli_query($con,$query2);
    $row2=mysqli_fetch_array($result2);
   //$this->Ln(90);
    $this->SetY(200);
   $this->Cell(-27);
    $this->SetFont('Arial','B',9);
    // Column widths
    $w = array(30, 31, 31, 31);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');

    $this->Ln();
    $this->SetFont('Arial','B',9);
    $this->Cell(3);
    $this->cell(15,4,'Rate','L');   // rate 

    $this->Cell(1);
    $this->cell(15,4,'Amount','R'); // amount
    $this->Cell(1);
    $this->cell(15,4,'Rate');   // rate 
    $this->Cell(1);
    $this->cell(15,4,'Amount'); // amount
    $this->Cell(-1);
    $this->cell(15,4,'Rate','L');   // rate 
    $this->Cell(1);
    $this->cell(15,4,'Amount','R'); // amount
    $this-> Line(43,211,136,211);// bottom border

    // data 
      $this->Ln();
      $this->SetFont('Arial','',9);
      $this->Cell(-22);
      $this->cell(15,4,$row2['TaxableAmnt'],'C');   // rate 
      $this->Cell(12);
      $this->cell(15,4,$row2['SGSTRate'],'C'); 
      $this->Cell(1);
      $this->cell(15,4,$row2['SGSTAmnt'],'C'); 
      $this->Cell(2);
      $this->cell(15,4,$row2['CGSTRate'],'C'); 
      $this->Cell(-1);
      $this->cell(15,4,$row2['CGSTAmnt'],'C'); 
      $this->Cell(2);
      $this->cell(15,4,$row2['IGSTRate'],'C'); 
      $this->Cell(-1);
      $this->cell(15,4,$row2['IGSTAmnt'],'C'); 
    $this->Ln(12);
    $this->Cell(-22);
    $this->cell(0,4,'Rupees');
     $this-> Line(32,227,134,227);// bottom border
      $this->SetFont('Arial','',9);
        $this->Cell(-100);
        $this->cell(10,2,$row2['Rupees'],0,0,'R');
//**************-----------------------------********************************
//boders of rate, amount lower table virtical from left 
    $this-> Line(43,211,43,220);          // ----------1st
          $this-> Line(57,207,57,220);        // inner
    $this-> Line(74,211,74,220);          //------------2 nd
          $this-> Line(88,207,88,220);        // inner
    $this-> Line(105,211,105,220);        // --------------3rd
          $this-> Line(119,207,119,220);     // inner
          $this-> Line(13,220,136,220);// bottom border
//**************-----------------------------********************************
  

    $this->Ln(-16);
    $this->SetFont('Arial','B',9);
    $this->Cell(100);
    $text3='Taxable Amount';
    $this->Cell(0,-6,$text3,0,0,'L');
        $this->SetFont('Arial','',9);
        $this->cell(10,-5,$row2['TaxableAmnt'],0,0,'R');
    $this->Ln(4);
    $this->SetFont('Arial','B',9);
    $this->Cell(100);    
    $text3='SGST@             %';
    $this->Cell(0,-2,$text3,0,0,'L');
        $this->SetFont('Arial','',9);
        $this->cell(-27,-2,$row2['SGSTRate'],0,0,'R');        $this->cell(37,-2,$row2['SGSTAmnt'],0,0,'R');

    $this->Ln(7);
    $this->SetFont('Arial','B',9);
    $this->Cell(100);    
    $text3='CGST@             %';
    $this->Cell(0,-2,$text3,0,0,'L');
        $this->SetFont('Arial','',9);
        $this->cell(-27,-2,$row2['CGSTRate'],0,0,'R');        $this->cell(37,-2,$row2['CGSTAmnt'],0,0,'R');
     
    $this->Ln(6);
    $this->SetFont('Arial','B',9);
    $this->Cell(100);    
    $text3='IGST@               %';
    $this->Cell(0,-2,$text3,0,0,'L');
        $this->SetFont('Arial','',9);
        $this->cell(-27,-2,$row2['IGSTRate'],0,0,'R');        $this->cell(37,-2,$row2['IGSTAmnt'],0,0,'R');


        
    $this->Ln(6);
    $this->SetFont('Arial','B',9);
    $this->Cell(100);    
    $text3='TOTAL';
    $this->Cell(0,-2,$text3,0,0,'C');
        $this->SetFont('Arial','',9);
        $this->cell(10,-2,$row2['GrandTotal'],0,0,'R');
/*---------vALUES----------------*/
   /* $this->Ln();
    $this->SetFont('Arial','B',9);
    $this->Cell(117);
    $text3='9';
    $this->Cell(0,-34,$text3,0,0,'L'); // SGST value 

    $this->Ln(2);
    $this->SetFont('Arial','B',9);
    $this->Cell(117);
    $text3='9';
    $this->Cell(0,-24,$text3,0,0,'L'); // CGST value

    $this->Ln(2);
    $this->SetFont('Arial','B',9);
    $this->Cell(117);
    $text3='18';
    $this->Cell(0,-18,$text3,0,0,'L'); // CGST value*/


    $this-> Line(136,207,201,207);
    $this-> Line(201,200,201,233); // lower right border TOTAL
    $this-> Line(176,200,176,233);//7 each height
    $this-> Line(13,200,13,233);//left boder virtical
    $this-> Line(13,233,201,233);// bottom border
    //$this-> Line(90,150,90,190);//-------------virtical line

    $this-> Line(136,214,201,214); // right side sgst,cgst boder
    $this-> Line(136,220,201,220);
    $this-> Line(136,226,201,226);

}
// Page footer
function endpart()
{
    $this->Ln(2);
    $this->SetFont('Arial','B',10);
    $this->Cell(-28);
    $text3="Conditions:";
    $this->Cell(0,10,$text3,0,0,'L');

    $this->Ln(4);
    $this->SetFont('Arial','B',8);
    $this->Cell(-28);
    $text3="(1)  All rates are Ex-our godown. ";
    $this->Cell(0,10,$text3,0,0,'L');

     $this->Ln(4);
    $this->SetFont('Arial','B',8);
    $this->Cell(-28);
    $text3="(2)  All disputes are subject to Howrah Jurisdiction only. ";
    $this->Cell(0,10,$text3,0,0,'L');

    $this->Ln(4);
    $this->SetFont('Arial','B',8);
    $this->Cell(-28);
    $text3="(3)  Payment 60 days from Invoice date. ";
    $this->Cell(0,10,$text3,0,0,'L');

     $this->Ln(4);
    $this->SetFont('Arial','B',8);
    $this->Cell(-28);
    $text3="(4)  BANK DETAILS: ";
    $this->Cell(0,10,$text3,0,0,'L');

     $this->Ln(4);
    $this->SetFont('Arial','B',8);
    $this->Cell(-25);
    $text3="    i) United Bank Of India  ";
    $this->Cell(0,10,$text3,0,0,'L');
        $this->SetFont('Arial','',8);
        $this->Ln(4);
        $this->Cell(-20);
        $text3="      A/c No. 0169250022695  ";
        $this->Cell(0,10,$text3,0,0,'L');    
        $this->Ln(0);
        $this->Cell(15);
        $text3="      IFSC : UTBI0LIL227  ";
        $this->Cell(0,10,$text3,0,0,'L');
        $this->Ln(0);
        $this->Cell(45);
        $text3="      Branch: LILLOOAH - 711204  ";
        $this->Cell(0,10,$text3,0,0,'L');

    $this->Ln(4);
    $this->SetFont('Arial','B',8);
    $this->Cell(-25);
    $text3="    ii) The Federal Bank Limited   ";
    $this->Cell(0,10,$text3,0,0,'L');
        $this->SetFont('Arial','',8);
        $this->Ln(4);
        $this->Cell(-20);
        $text3="      A/c No. 11960200041046  ";
        $this->Cell(0,10,$text3,0,0,'L');    
        $this->Ln(0);
        $this->Cell(15);
        $text3="      IFSC : FDRL0001196  ";
        $this->Cell(0,10,$text3,0,0,'L');
        $this->Ln(0);
        $this->Cell(45);
        $text3="      Branch: Haora - 711101  ";
        $this->Cell(0,10,$text3,0,0,'L');     

    $this->Ln(-30);
    $this->SetFont('Arial','B',9);
    $this->Cell(118);
    $text3="E. & O. E. ";
    $this->Cell(0,10,$text3,0,0,'L');

    $this->Ln(30);
    $this->SetFont('Arial','B',9);
    $this->Cell(102);
    $text3="For LAKSHMI ENGINEERING WORKS ";
    $this->Cell(0,10,$text3,0,0,'L');
    
}
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
     $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'R');
}
}
$pdf = new PDF();
$pdf->AddPage();
$header = array('Qnty.', 'HSN Code', 'DESCRIPTION', 'Rate', 'Unit', 'Amount');
$lowerheader = array('Taxable value', 'Central Tax', 'State Tax', 'IGST');
// Data loading


//$data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',9);
$pdf->design();
$pdf->ItemsTable($header);
$pdf->LowerTable($lowerheader);
$pdf->endpart();

$pdf->Output();

?>