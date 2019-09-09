<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lakshmi Engineering Works- PDF</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/app.js"></script>

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->
<style type="text/css">
	.bottom{
		color: #fff;
	}
	.sign{
		color: #000;
		font-size: 15px;
		opacity: 0.7
	}
	.sign:hover{
		text-decoration: underline;
	}
	</style>

</head>

<body class="login-container" background="imgs/8.jpg">
<?php
session_start();
if(isset($_SESSION['currentuser']))
	{
		//echo "Welcome ".$_SESSION['currentuser']." in your profile...";
		
	
?>
	


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="twopages.php" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-file-download2"></i></div>
								<h5 class="content-group">Lakshmi Engineering Works <small class="display-block">Get PDF</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Tax Invoice No" name="invoice" autofocus required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Copy For" name="copy">
								<div class="form-control-feedback">
									<i class="icon-copy text-muted"></i>
								</div>
							</div>
							

							<!--<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" name="pass">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>-->

							<div class="form-group">
								<button type="submit" class="btn bg-pink-400 btn-block">Generate <i class="icon-circle-right2 position-right"></i></button>
							</div>
							
							<!--<div class="text-center">
								<a href="signup.html" class="sign"> Generate</a>
							</div>
							<div class="text-center">
								<a href="#">Forgot password?</a>
							</div>-->
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2017. <a href="#" class="bottom">Lakshmi Engineering Works InvoiceApp</a> by 
						<a href="#" target="_blank" class="bottom">Saikat & Dipankar</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
<?php
}
else
{
	header("location:login.html?status=Please enter userid and password");
} 
?>
</body>
</html>
