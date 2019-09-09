<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LAKSHMI ENGINEERING WORKS</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="main.png">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	
	<script type="text/javascript" src="assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/extensions/cookie.js"></script>
	
	
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switch.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>

	<script type="text/javascript" src="assets/js/custome.js"></script>
	
	<script type="text/javascript" src="assets/js/form_checkboxes_radios.js"></script>

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->
<style>
    .pkg {
        color: #fff;
        }
    input.pkg::-webkit-input-placeholder{
        color: white;
    }
    #name{
    	color: #11bed4;
    	font-size: 15px;
    	letter-spacing: 2px;
    }
    .postg, .postg::-webkit-input-placeholder{
    	color:white;
    	width:80%;
    }
     #logout{
	  padding: 8px;
	  padding-left: 10px;
	  padding-right: 10px;
	   border:2px solid #f47c51;
	  border-radius: 10px 10px 10px 10px;
	  background-color: #f47c51;
	  color: white;
	  font-size: 15px;
	  text-decoration: none;
	}
	#pdf{
	  padding: 8px;
	  padding-left: 10px;
	  padding-right: 10px;
	   border:2px solid #51c2de;
	  border-radius: 10px 10px 10px 10px;
	  background-color: #51c2de;
	  color: white;
	  font-size: 15px;
	}
</style>
</head>

<body>
<?php/*
session_start();
if(isset($_SESSION['currentuser']))
	{
		//echo "Welcome ".$_SESSION['currentuser']." in your profile...";
		*/
	
?>
	<!-- Main navbar -->

	<div class="navbar navbar-default header-highlight">
		<!--<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>-->

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			
			</ul>
			<div class="navbar-left">
				<p class="navbar-text" id="name">LAKSHMI ENGINEERING WORKS</p>
			</div>
			
			<div class="navbar-right">
				<!--<p class="navbar-text"> Welcome 
				<?php
				//echo "".$_SESSION['currentuser']."";
				?>
				</p>-->
				<p class="navbar-text"><a href="logout.php" id="logout" >Log out</a></p>
			</div>
			<div class="navbar-right">

				<p class="navbar-text"><a href="getpdf.php" id="pdf" style='text-decoration:none;color:#FFF;'>
				<i class="icon-file-download"></i>Download PDF</a></p>
			</div>


			<!--<div class="navbar-right dropdown">

			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
				Dropdown<span class="caret"></span></button>

				<ul class="dropdown-menu">
						<li><a href="getpdf.php" style='text-decoration:none;color:#11bed4;'><p class="navbar-text">
				<i class="icon-file-download"></i>Download PDF</p></a></li>
						<li><a href="#">Action</a></li>
					
				</ul>
				<i class="icon-file-download"></i>Download PDF</a></p>-->
			</div>
		</div>
	</div>

	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic setup -->
		            <div class="panel panel-white">
										<div class="panel-heading">
											<h6 class="panel-title">Invoice Form</h6>
											<div class="heading-elements">
												<ul class="icons-list">
																	<li><a data-action="collapse"></a></li>
																	<li><a data-action="reload"></a></li>
																	<li><a data-action="close"></a></li>
																</ul>
															</div>
										</div>

	                	<form class="steps-basic"  method="post" id="submitForm">
							<h6>Party's Details</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Tax Invoice No: <span class="text-danger">*</span></label>
											<input type="text" name="taxNo" class="form-control required"  autofocus>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Date :<span class="text-danger">*</span></label>
											<input type="text" class="form-control pickadate-editable required" name="bdate">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Messrs :<span class="text-danger">*</span></label>
											<input type="text" name="mess" class="form-control required">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Messers Address :<span class="text-danger">*</span></label>
											<input type="text" name="ma" class="form-control required">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Party's G.S.T. No.:<span class="text-danger">*</span></label>
											<input type="text" name="gstNo" class="form-control required">
										</div>
									</div>

									<div class="col-md-6">
												<div class="form-group">
													<label>Through :<span class="text-danger">*</span></label>
													<input type="text" name="through" class="form-control required">
												</div>
											</div>
										</div>
										<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>LR/RR No. : </label>
											<input type="text" name="lrNo" class="form-control">
										</div>
									</div>

									<div class="col-md-6">
												<div class="form-group">
													<label>Private Mark :<span class="text-danger">*</span></label>
													<input type="text" name="pMark" class="form-control required">
												</div>
											</div>
										</div>
									<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Document Through: <span class="text-danger">*</span></label>
											<input type="text" name="docThr" class="form-control required">
										</div>
									</div>


									<div class="col-md-6">
												<div class="form-group">
													<label>No of Bags :<span class="text-danger">*</span></label>
													<input type="text" name="noOfBeg" class="form-control noOfBeg required">
												</div>
									</div>

									</div>
									<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>State Code </label>
											<input type="text" name="state" class="form-control">
										</div>
									</div>



									</div>
							</fieldset>

							<h6>Item Details</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-12">
									    <div class="table-responsive" style="margin-bottom: 10px;">
							<table class="table">
								<thead>
									<tr class="bg-blue">
										<th>#</th>
										<th style="width: 10%">Qnty.</th>										
										<th style="width: 10%">Unit</th>
										<th style="width: 10%">Rate/Ft.</th>
										<th style="width: 10%">HSN Code</th>
										<th>Description</th>
										<th style="width: 10%">Length</th>
										<th style="width: 10%">Rate</th><!--(Length/12)*Rate/Ft-->
										<th style="width: 10%">Amount</th><!--Rate*Quantity-->
										<th>    
                                          <button type="button" class="btn btn-default btn-raised btn-xs legitRipple addRow" name="no[]n"><b><i class="icon-add-to-list"></i></b></button>
                                        </th>
                                <!--SGST -> 9%, CGST -> 9%, IGST-> 18% -->
									</tr>
								</thead>
								<tbody class="tbd">
									<tr>
										<td class="no">1</td>
										<td><input type="text" name="qnty[]" class="form-control qnty"></td>
										<td><select style="width: 85px" name="unit[]" class="form-control unit"><option value="Each">Each</option><option value="Feet">Feet</option></select></td>
										<td><input type="text" name="rp[]" class="form-control rp"></td>
										<td><input type="text" name="hsn[]" class="form-control hsn"></td>
										<td>
                                            <input type="text" name="desp[]" class="form-control desp">
										</td>
										<td><input type="text" name="len[]" class="form-control len"></td>
										<td>
                                           <input type="text" name="rate[]" class="form-control rate">
										</td>
										
										<td>
                                           <input type="text" name="amnt[]" class="form-control amnt">
										</td>
										<td><button type="button" class="btn btn-danger btn-raised btn-xs dltRow"><b><i class="glyphicon glyphicon-trash"></i></b></button></td>								
										
									</tr>
									
								</tbody>
								<tfoot>
								    <tr class="bg-primary-800">
								        <th colspan="3" class="text-center">SGST & CGST
								        
								        <input type="checkbox" class="switchery txtype switchery-danger" name="ckb" checked="checked">
								         
								        IGST
								        </th>
										<th colspan="2">IGST: ₹ <span class="igst">00.00</span>
										<input type="text" class="igstVal" name="igstVal" hidden="hidden">
										    &nbsp;&nbsp;&nbsp;
										
										SGST: ₹ <span class="sgst">00.00</span>
										<input type="text" class="sgstVal" name="sgstVal" hidden="hidden">
										&nbsp;&nbsp;&nbsp;
										
										CGST: ₹ <span class="cgst">00.00</span>
										<input type="text" class="cgstVal" name="cgstVal" hidden="hidden">
										</th>
										<th>
										<input type="text" class="form-control pkg" placeholder="Package : 0.00" name="pkg">
										</th>
										
										<th colspan="2">Taxable Ammount : ₹ <span class="ta">00.00</span> 
										    <input type="text" hidden="hidden" class="tamnt" name="tamnt" value="">
										</th>
										<th style="width:9%"><input type="text" class="form-control postg" placeholder="Postage :" name="postg">
										<th colspan="2">Total : ₹ <span class="totalS">00.00</span>
										    <input type="text" hidden="hidden" class="total" name="total" value="">
										    <input type="text" hidden="hidden" class="tIW" id="inw"  name="tIW" value="">
										</th>
										
								    </tr>
								</tfoot>
							</table>
						</div>
									</div>
								</div>
							</fieldset>


							
						</form>
		            </div>
		            <!-- /basic setup -->




					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2017. <a href="#">Lakshmi Engineering Works InvoiceApp</a> by <a href="#" target="_blank">Saikat & Dipankar</a>
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
<?php/*
}
else
{
	header("location:login.html?status=Please enter userid and password");
} */
?>

</body>
</html>
