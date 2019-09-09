<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!empty($_POST['uid']) && !empty($_POST['umob']))
{
	$con=mysqli_connect("localhost","root","","ebill");//database connection
	//mysqli_select_db("shop");

	$uid=$_POST['uid'];
	$umob=$_POST['umob'];

	$order="SELECT * FROM account WHERE user ='$uid' and uphone='".$umob."'";
	//echo $order;

	$result=mysqli_query($con,$order);
	$count=mysqli_num_rows($result);
//echo $count;
	if($count==1)
	{
		$order2="DELETE FROM account WHERE user ='$uid' and uphone='".$umob."'";
		$result1=mysqli_query($con,$order2);
	    header("location:signup.html");
	}
	else 
	{
		header("location:login_password_recover.html?status=Wrong userid or password");

	}
	
}
else
{
	header("location:login_password_recover.html?status=holaPlease enter userid and password");
}

?>
</body>
</html>