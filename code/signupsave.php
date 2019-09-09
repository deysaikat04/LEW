<?php
if(!empty($_POST['uname']) && !empty($_POST['upass']))
{
	$con=mysqli_connect("localhost","root","","invoice");//database connection
	//mysqli_select_db("shop");

	$uid=$_POST['uname'];
	$pass=$_POST['upass'];
	$mob=$_POST['mob'];

	//$order="SELECT * FROM user WHERE uid ='$uid' and password='".$pass."'";
	//echo $order;
	$order="INSERT into accounts(UName,UPass,UMob) VALUES ('".$uid."','".$pass."','".$mob."')";
	$result1=mysqli_query($con,$order);
	/*$count=mysqli_num_rows($result1);

	if($count==1)
	{
		session_start();
		$_SESSION['currentuser']=$uid;
	    header("location:profile.php");
	}
	else 
	{*/
		if($result)
		{
			header("location:signup.html?status=Please enter userid and password");
		}

		else
		{
			header("location:login.html?status=Success!");
		}
}
?>