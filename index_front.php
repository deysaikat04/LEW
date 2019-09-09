<?php
$cn = mysql_connect('localhost','root','');
if($cn){
	mysql_select_db('bill',$cn);
}

if(isset($_POST['save']))

{
	$id= $_POST['taxNo'];
	mysql_query("INSERT INTO info(invoice,date,messrs,dr,cst,vat,through,lr,private,dated,docthrough,bag) 
	VALUES('{$id}','{$_POST['date']}','{$_POST['mess']}','{$_POST['dr']}','{$_POST['cstNo']}','{$_POST['vatNo']}',
	'{$_POST['through']}','{$_POST['lrNo']}','{$_POST['pMark']}','{$_POST['dated']}','{$_POST['docThr']}','{$_POST['noOfBeg']}')");

	
	for($i = 0;$i <count($_POST['qnty']);$i++)
	{
/*================================================================================
  |                                                                              |
  |                              SOLVED                                         |
  ================================================================================*/
		mysql_query("INSERT INTO item SET invoice= '{$id}',
										  quantity = '{$_POST['qnty'][$i]}',
										  desp = '{$_POST['desp'][$i]}',
										  rate = '{$_POST['rate'][$i]}',
										  unit = '{$_POST['unit'][$i]}',
										  amount = '{$_POST['amnt'][$i]}' 
										  ");
	}
	mysql_query("INSERT INTO grand(invoice,package,p_amount,cst,cst_ammount,postage,grand,word) VALUES('{$id}','{$_POST['pack']}',
		'{$_POST['packamnt']}','{$_POST['cst']}','{$_POST['cstamnt']}','{$_POST['postage']}','{$_POST['gt']}','{$_POST['inw']}')");
}

?>




<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="stle.css" rel="stylesheet">

	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
    <title></title>

    <style type="text/css">
    	body{
    		
    	}
    	table > thead > th{
    		text-align: center;
    	}

    	thead{
    		background-color: rgba(55,71,79 ,.4);
    	}

    	tbody{
    		background-color: rgba(3,169,244 ,.4);
    	}
    	tfoot{
    		background-color: rgba(246, 71, 71,.4);
    	}
    </style>
</head>

<body>

	<div class="details">
		<div class="container">

		<center><h3>INVOICE</h3></center>

		<form class="form" role="form" action="" method="post">
			
			
			<div class="form-group">
				<label for="invno" class="col-sm-2 control-label">Tax Invoice No:</label>
				<div class="col-sm-10">
					<input type="text" name="taxNo" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Date : </label>
				<div class="col-sm-10">
					<input type="date" name="date" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Messrs :</label>
				<div class="col-sm-10">
					<input type="text" name="mess" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Dr. : </label>
				<div class="col-sm-10">
					<input type="text" name="dr" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Party's C.S.T. No.: </label>
				<div class="col-sm-10">
					<input type="text" name="cstNo" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">VAT/TIN No. : </label>
				<div class="col-sm-10">
					<input type="text" name="vatNo" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Through :</label>
				<div class="col-sm-10">
					<input type="text" name="through" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">LR/RR No. : </label>
				<div class="col-sm-10">
					<input type="text" name="lrNo" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Private Mask : </label>
				<div class="col-sm-10">
					<input type="text" name="pMark" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Dated : </label>
				<div class="col-sm-10">
					<input type="date" name="dated" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Document Through: </label>
				<div class="col-sm-10">
					<input type="text" name="docThr" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">No of Bags : </label>
				<div class="col-sm-10">
					<input type="text" name="noOfBeg" class="form-control noOfBeg">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-10">
					<input type="submit" value="SAVE" name="save" class="btn btn-primary">
					<input type="reset"  name="" class="btn btn-danger">
				</div>
			</div>
		</div>
		
<hr>
		
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Qnty.</th>
					<th style="text-align: center;">Description</th>
					<th>Masure</th>
					<th>Diameter</th>
					<th>Unit</th>
					<th>Length</th>
					<th>Unit</th>
					<th>Rate</th>     	
					<th>Amount</th>
					<th><input type="botton" value="+" id="add" class="btn btn-success" style="width: 50px"></th>
				</tr>
			</thead>
			<tbody class="tbd">
				<tr>
					<td class="no">1</td>
					<td><input type="text"  style="width: 70px" name="qnty[]" class="form-control qnty"></td>
					<td><input type="text" style="width: 350px" name="desp[]" class="form-control desp"></td>
					<td><select name="unit[]" style="width: 80px" class="form-control unit"><option value="Feet">Feet</option><option value="Each">Each</option><option value="Dozen">Dozen</option></select></td>
					<td><input type="text"  style="width: 60px" name="diam[]" class="form-control diam"></td>
					<td><select style="width: 85px"  class="form-control base_unit_1"><option value="Inch">Inch</option><option value="Feet">Feet</option></select></td>
					<td><input type="text"  style="width: 60px" name="len[]" class="form-control len"></td>
					<td><select style="width: 85px"  class="form-control base_unit_2"><option value="Inch">Inch</option><option value="Feet">Feet</option></select></td>
					<td><input type="text" style="width: 60px" name="rate[]" class="form-control rate"></td>
					<td><input type="text" style="width: 150px" name="amnt[]" class="form-control amnt"></td>
					<td><a href="#" class="remove">Delete</a></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th></th>
					<th><input type="text" style="width: 70px" name="pack" placeholder="Pack" class="form-control pack"></th>
					<th><input type="text" style="width: 100px" name="packamnt" placeholder="Pack Amnt" class="form-control packamnt withpk"></th>
                    <th><input type="text" style="width: 80px" placeholder="With Pack" class="form-control wp gtt" name="wp"></th>
					<th><input type="text" style="width: 60px" name="cst" placeholder="CST" class="form-control cst"></th>
					<th><input type="text" style="width: 100px" name="cstamnt" placeholder="CST Amnt" class="form-control cstamnt gtt"></th>					
					<th><input type="text" style="width: 80px" name="postage" placeholder="Postage" class="form-control postage gtt"></th>
					<th><input type="text" style="width: 130px" placeholder="Grand Total" id="gt" class="form-control gt" name="gt"></th>
					<th></th>
					<th><input type="text" style="width: 150px" class="form-control withpk total" name="total"></th>
				</tr>
				<tr>
					<td colspan="5"></td>
					<td colspan="5"><input type="text" name="inw" id="inw" class="form-control inw" placeholder="In Words"></td>
				</tr>
			</tfoot>

		</table>
		</form>
	 </div>



	
</body>
</html>
<script type="text/javascript">
/*================================================================================
  |                                                                              |
  |                             ADD NEW ROW                                      |
  |                                                                              |
  ================================================================================*/
$(function(){
	$('#add').click(function(){
		addnew();
	});
/*================================================================================
  |                                                                              |
  |                            REMOVE ROW                                        |
  |                                                                              |
  ================================================================================*/
	$('body').delegate('.remove','click',function(){
		$(this).parent().parent().remove();
	});

/*================================================================================
  |                                                                              |
  |                           PRODUCT RATE CALCULATION                           |
  |                                                                              |
  ================================================================================*/
	$('.details').delegate('.noOfBeg,.qnty,.unit,.diam,.base_unit_1,.len,.base_unit_2,.rate,.amnt,.pack,.packamnt,.cst,.cstamnt,.postage,.gt,.inw','keyup',function(){  
		var tr = $(this).parent().parent();
		var qnty = tr.find('.qnty').val();
		var unit = tr.find('.unit').val();
		var diam = tr.find('.diam').val();
		var base_unit_1 = tr.find('.base_unit_1').val();
		var len = tr.find('.len').val();
		var base_unit_2 = tr.find('.base_unit_2').val(); 
		var rate = tr.find('.rate').val();
        
		var amnt;// = qnty * rate;
/*================================================================================
  |                                                                              |
  |                           AMOUNT CALCULATION                                 |
  |                                                                              |
  ================================================================================*/
		function cal() {
			var Feet="Feet";
			var Inch="Inch";
			var Each="Each";
			var Dozen="Dozen";


			if (unit ==Feet) 
			{
				if((base_unit_1==Inch) && (base_unit_2==Inch))
				{
					amnt=qnty*((len*diam)/12)*rate;

				}

				if((base_unit_1==Feet) && (base_unit_2==Inch))
				{
					amnt=qnty*((diam/12)*len)*rate;

				}

				if((base_unit_1==Inch) && (base_unit_2==Feet))
				{
					amnt=qnty*((len/12)*diam)*rate;

				}

				if((base_unit_1==Feet) && (base_unit_2==Feet))
					{
						amnt=qnty*(len*diam)*rate;

					}
			} 
			else if ( unit ==Each )
				 {
					amnt=qnty*rate;
				 }
			else if ( unit ==Dozen ) 
				 {
					amnt=(qnty*rate)/12;
				 }
	  }
	cal();
/*================================================================================
  |                                                                              |
  |                         TOTAL CALCULATION                                    |
  |                                                                              |
  ================================================================================*/
	tr.find('.amnt').val(amnt);

		function total()
		{
			var t = 0;
			$('.amnt').each(function(i,e)
			{
				var amt = $(this).val()-0;
				t += amt;
			});
			$('.total').val(t);
		}


        total();
        
/*================================================================================
  |                                                                              |
  |                    PACK,CST,GT CALCULATION                                   |
  |                                                                              |
  ================================================================================*/
        var beg = $(".noOfBeg").val();  
        var pack = $(".pack").val();
        var rt = $(".total").val();
        var pak = (beg*pack);
        tr.find('.packamnt').val(pak);
       
        function withpak(){
            var w = 0;
            $('.withpk').each(function(){
                var wi = $(this).val()-0;
                w += wi;
            });
            $('.wp').val(w);
    }
        withpak();
        
        var wp = $('.wp').val();
        var cst = tr.find('.cst').val();
        var camt = (wp*cst)/100;
        tr.find('.cstamnt').val(camt);
        
        
        function gt(){
         var g = 0;
            $('.gtt').each(function(){
                  var gg = $(this).val()-0;
                  g += gg;
                  });
            $('.gt').val(g);    
        }
        gt();
 /*================================================================================
  |                                                                              |
  |                               IN WORDS                                       |
  |                                                                              |
  ================================================================================*/
        var a = ['', 'One ', 'Two ', 'Three ', 'Four ', 'Five ', 'Six ', 'Seven ', 'Eight ', 'Nine ', 'Ten ', 'Eleven ', 'Twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
		var b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
		inWords($('#gt').val());

		function inWords(num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return;
    var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
    $('#inw').val(str);
}
	});
	
});




function addnew() {
	var n = ($('.tbd tr').length-0)+1;
	var tr = '<tr>'+
	'<td class="no">' + n + '</td>'+
	'<td><input type="text" style="width: 70px" name="qnty[]" class="form-control qnty"></td>'+
	'<td><input type="text" style="width: 350px" name="desp[]" class="form-control desp"></td>'+
	'<td><select name="unit[]" style="width: 80px" class="form-control unit"><option value="Feet">Feet</option><option value="Each">Each</option><option value="Dozen">Dozen</option></select></td>'+					
	'<td><input type="text"  style="width: 60px" name="diam[]" class="form-control diam"></td>'+
	'<td><select style="width: 85px"  class="form-control base_unit_1"><option value="Inch">Inch</option><option value="Feet">Feet</option></select></td>'+
	'<td><input type="text"  style="width: 60px" name="len[]" class="form-control len"></td>'+
	'<td><select style="width: 85px" class="form-control base_unit_2"><option value="Inch">Inch</option><option value="Feet">Feet</option></select></td>'+
	'<td><input type="text" style="width: 60px" name="rate[]" class="form-control rate"></td>'+
	'<td><input type="text" style="width: 150px" name="amnt[]" class="form-control amnt"></td>'+
	'<td><a href="#" class="remove">Delete</a></td>'+
	'</tr>';
	$('.tbd').append(tr);
}
</script>
