<?php
$taxNo = $_POST['taxNo'];
$date = $_POST['date'];
$mess = $_POST['mess'];
$ma = $_POST['ma'];
$gstNo = $_POST['gstNo'];
$through = $_POST['through'];
$lrNo = $_POST['lrNo'];
$pMark = $_POST['pMark'];
$docThr = $_POST['docThr'];


$qnty = $_POST['qnty'];
	$rp = $_POST['rp']; // Rate/ft no need to save in db
$hsn = $_POST['hsn'];
$desp = $_POST['desp'];
	$len = $_POST['len'];// Length no need to save in db
$rate = $_POST['rate'];
$unit = $_POST['unit'];
$amnt = $_POST['taxNo'];
$igstVal = $_POST['igstVal'];
$sgstVal = $_POST['sgstVal'];
$cgstVal = $_POST['cgstVal'];

$pkg = $_POST['pkg'];

$tamnt = $_POST['tamnt'];
$total = $_POST['total'];
$tot_in_word = $_POST['tIW'];

/*$data = array(
"taxNo" => $_POST['taxNo'],
"date_of_entry" => $_POST['date'],
"mess" => $_POST['mess'],
"ma" => $_POST['ma'],
"gstNo" => $_POST['gstNo'],
"through" => $_POST['through'],
"lrNo" => $_POST['lrNo'],
"pMark" => $_POST['pMark'],
"docThr" => $_POST['docThr'],
"qnty" => $_POST['qnty'],
"rp" => $_POST['rp'],
"hsn" => $_POST['hsn'],
"desp" => $_POST['desp'],
"len" => $_POST['len'],
"rate" => $_POST['rate'],
"unit" => $_POST['unit'],
"amnt" => $_POST['taxNo'],
"igstVal" => $_POST['igstVal'],
"sgstVal" => $_POST['sgstVal'],
"cgstVal" => $_POST['cgstVal'],
"pkg" => $_POST['pkg'],
"tamnt" => $_POST['tamnt'],
"total" => $_POST['total'],
"tot_in_word" => $_POST['tIW']
);
//    json_decode($data);

echo"<pre>";
print_r($data);*/
//header("Location: table.html");
//echo $taxNo;
	/*$con=mysqli_connect("localhost","root","","ebill");//database connection
	//mysqli_select_db("shop");

	$order="INSERT into details(tax,bdate) values('".$taxNo."','".$date."')";	
	$result=mysqli_query($con,$order);
	
	mysqli_close($con);	*/

//-------------------Items--------------------
	$cn = mysql_connect('localhost','root','');
	if($cn)
	{
		mysql_select_db('ebill',$cn);
	}

	$l=0;
	$sgstRate=9;
	$cgstRate=9;
	$igstRate=18;
	$l=count($qnty);

	mysql_query("INSERT INTO  parties (InvoiceNo,BillDate,Messers,MessersAdd,GSTNo,Through,LRRRNo,PrivateMark,
		DocThrough,NoOfBags,Packing,TaxableAmnt,SGSTRate,SGSTAmnt,CGSTRate,CGSTAmnt,IGSTRate,IGSTAmnt,GrandTotal,Rupees) 
	VALUES('{$_POST['taxNo']}','{$_POST['bdate']}','{$_POST['mess']}','{$_POST['ma']}','{$_POST['gstNo']}','{$_POST['through']}',
		'{$_POST['lrNo']}','{$_POST['pMark']}','{$_POST['docThr']}','{$_POST['noOfBeg']}','{$_POST['pkg']}','{$_POST['tamnt']}'
		,'{$sgstRate}','{$_POST['sgstVal']}','{$cgstRate}','{$_POST['cgstVal']}','{$igstRate}','{$_POST['igstVal']}','{$_POST['total']}','{$_POST['tIW']}')");

	//$order="INSERT into items(InvoiceNo,Qnty,HSNCode,Description,Rate,Unit,Amount,packing,TaxableAmnt,SGSTRate,SGSTAmnt,CGSTRate,CGSTAmnt,IGSTRate,IGSTAmnt,GrandTotal,Rupees) 
	//values('".$taxNo."','".$qnty."','".$hsn."','".$desp."','".$rate."','".$unit."','".$amnt."','".$pkg."','".$tamnt."','".$sgstRate."''".$sgstVal."','".$cgstRate."''".$cgstVal."','".$igstRate."''".$igstVal."','".$total."','".$tot_in_word."')";	
	
	for($i = 0;$i <count($_POST['qnty']);$i++)
	{
       mysql_query("INSERT INTO items SET InvoiceNo= '{$_POST['taxNo']}',
										  Qnty = '{$_POST['qnty'][$i]}',
										  HSNCode = '{$_POST['hsn'][$i]}',
										  Description = '{$_POST['desp'][$i]}',
										  Rate = '{$_POST['rate'][$i]}',
										  Unit = '{$_POST['unit'][$i]}',
										  Amount = '{$_POST['amnt'][$i]}' ");
		//echo $query;
		//$result=mysqli_query($con,$query);
	}
	mysqli_close($con);	
	//header("location:login2.html");
//die;
?>