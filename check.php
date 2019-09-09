<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!empty($_POST['uid']) && !empty($_POST['pass']))
{
	$con=mysqli_connect("localhost","root","","ebill");//database connection
	//mysqli_select_db("shop");

	$uid=$_POST['uid'];
	$pass=$_POST['pass'];

	$order="SELECT * FROM account WHERE user ='$uid' and upassword='".$pass."'";
	//echo $order;

	$result1=mysqli_query($con,$order);
	$count=mysqli_num_rows($result1);
//echo $count;
	if($count==1)
	{
		session_start();
		$_SESSION['currentuser']=$uid;
	    header("location:bill.php");
	}
	else 
	{
		header("location:login.html?status=Wrong userid or password");

	}
	
}
else
{
	header("location:login.html?status=holaPlease enter userid and password");
}

?>
</body>
</html>