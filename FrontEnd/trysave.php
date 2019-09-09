<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*$taxNo=$_POST['taxNo'];
$qnty=$_POST['qnty'];
$hsn = $_POST['hsn'];
$desp = $_POST['desp'];
$rate = $_POST['rate'];
$unit = $_POST['unit'];
$amnt = $_POST['amnt'];
$l=count($qnty);
/*for($i=1;$i<$l;$i++)
    {

        echo $qty[$i];
        echo "<br>";
        echo $rp[$i];
		
	}
	/*foreach ( ($qty as $k1 => $v1) && ($rp as $k2 => $v2) )
	{
		echo $v1;
		echo $v2;
	}*/

$con=mysqli_connect("localhost","root","","ebill");//database connection?>
<table>
<?php
$required=array('taxNo','qnty[]');
$error=false;
foreach($required as $field)
{
	if(empty($_POST[$field]))
	{
		$error=true;
	}
}
if($error)
{
	echo "required";
}
for($j=0;$j<25;$j++)
{
	$taxNo=$_POST['taxNo'];
	$qnty=$_POST['qnty'];
	$hsn = $_POST['hsn'];
	$desp = $_POST['desp'];
	$rate = $_POST['rate'];
	$unit = $_POST['unit'];
	$amnt = $_POST['amnt'];
	$l=count($qnty);
	for($i=0;$i<$l;$i++)
	    {
	       $query="INSERT into items(InvoiceNo,Qnty,HSNCode,Description,Rate,Unit,Amount) values('".$taxNo."',".$qnty[$i].",'".$hsn[$i]."','".$desp[$i]."',".$rate[$i].",'".$unit[$i]."',".$amnt[$i].")";
			//echo $query;
			$result=mysqli_query($con,$query);
			if($result)
				echo "Success";
			else
				echo "fail";
		}
}
	mysqli_close($con);	
?>
</table>

</body>
</html>

	
