$(function() {
//    
$(".steps-basic").steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="number">#index#</span> #title#',
        labels: {
            finish: 'Submit'
        },
        onFinished: function (event, currentIndex) {
//            var fd = $("#submitForm").serialize();
//            console.log(fd);
//            alert("Form submitted.");
            // this is the id of the form
//            $("#idForm").submit(function(e) {
//
                var url = "./submit.php"; // the script where you handle the form input.
//      
                //checkform();
                $.ajax({
                       type: "POST",
                       url: url,
                       data: $("#submitForm").serialize(), // serializes the form's elements.
                       success: function()
                       {
                           alert("Data Saved Successfully!"); // show response from the php script.
                       }, 
                       error: function(XMLHttpRequest,textStatus,errorThrown)
                       {
                        alert("Error in saving the Data! TRY AGAIN!")
                       }
                     });
//
//                event.preventDefault(); // avoid to execute the actual submit of the form.
//            });
        }

        
    });
    
    /****************Validation*********************/
    function checkForm() {
// Fetching values from all input fields and storing them in variables.
var taxNo = document.getElementById("taxNo").value;
var password = document.getElementById("bdate").value;
var email = document.getElementById("mess").value;
//var website = document.getElementById("website1").value;
//Check input Fields Should not be blanks.
if (taxNo == '' || password == '' || email == '' ) 
{
alert("Fill All Fields");
} else {
//Notifying error fields
var username1 = document.getElementById("taxNo");
var password1 = document.getElementById("bdate");
var email1 = document.getElementById("mess");
//var website1 = document.getElementById("website");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
/*if (username1.innerHTML == 'Must be 3+ letters' || password1.innerHTML == 'Password too short' || email1.innerHTML == 'Invalid email' || website1.innerHTML == 'Invalid website') {
alert("Fill Valid Information");
} else {
//Submit Form When All values are valid.
document.getElementById("myForm").submit();
}*/
}
}
    
    /****************End Validation*********************/
    
    // Editable input
    var $input_date = $('.pickadate-editable').pickadate({
        editable: true,
        onClose: function() {
            $('.datepicker').focus();
        }
    });

    var picker_date = $input_date.pickadate('picker');
    $input_date.on('click', function(event) { // register events (https://github.com/amsul/pickadate.js/issues/542)
        if (picker_date.get('open')) {
            picker_date.close();
        } else {
            picker_date.open();
        }                        
        event.stopPropagation();
    });
    /************** On Click Add New ***********s****/
    $('.addRow').on('click', function(){
        addnew();
    });
    
    /**************** On Click Remove ****************/
    $('body').on('click','.dltRow',function(){
		$(this).parent().parent().remove();
	});
    /********************* Add New Row ***************************/
    function addnew() {
	var n = ($('.tbd tr').length-0)+1;
	var tr = '<tr>'+
	'<td class="no">' + n + '</td>'+
    '<td><input type="text" name="qnty[]" class="form-control qnty"></td>'+
	'<td><input type="text" name="rp[]" class="form-control rp"></td>'+
	'<td><input type="text" name="hsn[]" class="form-control hsn"></td>'+
    '<td><input type="text" name="desp[]" class="form-control desp"></td>'+
	'<td><input type="text" name="len[]" class="form-control len"></td>'+
    '<td><input type="text" name="rate[]" class="form-control rate"></td>'+
	'<td><input type="text" name="unit[]" class="form-control unit" value="Each"></td>'+
	'<td><input type="text" name="amnt[]" class="form-control amnt"></td>'+
	'<td><button type="button" class="btn btn-danger btn-raised btn-xs dltRow"><b><i class="glyphicon glyphicon-trash"></i></b></button>'+
    '</td></tr>'
	$('.tbd').append(tr);
    }
    /****************************Calculation********************************/
//    $('.page-container').on('.qnty,.rp,.rate,.len,.noOfBeg',"keyup",function(){  
//		var tr = $(this).parent().parent();
//		var qnty = tr.find('.qnty').val();
//		var rp = tr.find('.rp').val();
//		var len = tr.find('.len').val(); 
//        var rate = (len/12)*rp;
//        console.log('rate');
//        
//    });
    $('.steps-basic').on('keyup change', '.qnty,.rp,.rate,.len,.noOfBeg,.totalS, .igst, .sgst, .cgst, .txtype, .pkg', function() {
        var taxAbl;
        var tax;
        var sgs;
        var cgs;
        var tr = $(this).parent().parent();
		var qnty = tr.find('.qnty').val();
		var rp = tr.find('.rp').val();
		var len = tr.find('.len').val(); 
        var rate = len/12*rp;
        var amount = rate*qnty;
        tr.find('.rate').val(rate.toFixed(2)); 
        tr.find('.amnt').val(amount.toFixed(2)); 
        
    
    /***************************** Taxable Amount ***************************/
   function taxable()
		{
			var t = 0;
			$('.amnt').each(function(i,e)
			{
				var amt = $(this).val()-0;
				t += amt;
			});
            var pkg = $('.pkg').val();
            t = (t + +pkg);
			$('.ta').text(t.toFixed(2));
			$('.tamnt').val(t.toFixed(2));
            taxAbl = t.toFixed(2);
		}
    taxable();
        
        if ($('input.txtype').is(':checked')) {
            /***************** Igst *****************/
                function calIgst(){
                    var tot = $('.tamnt').val();
                    var igst = tot*18/100;
                    $('.igst').text(igst.toFixed(2));
                    $('.igstVal').val(igst.toFixed(2));
                    
                    tax = igst.toFixed(2);
                    $('.sgst').text("00.00");
                    $('.sgstVal').val(00);
                    
                    $('.cgst').text("00.00");
                    $('.cgstVal').val(00);
                }
        calIgst();
        } else {
            /***************** Sgst *****************/
            function calSgst(){
                var tot = $('.tamnt').val();
                var sgst = tot*9/100;
                $('.sgst').text(sgst.toFixed(2));
                $('.sgstVal').val(sgst.toFixed(2));
                sgs = sgst.toFixed(2);
            }
            calSgst();
            /***************** Cgst *****************/
            function calCgst(){
                var tot = $('.tamnt').val();
                var cgst = tot*9/100;
                $('.cgst').text(cgst.toFixed(2));
                $('.cgstVal').val(cgst.toFixed(2));
                cgs = cgst.toFixed(2);
            }
            calCgst();
            $('.igst').text("00.00");
            $('.igstVal').val(00);
            tax = (+sgs + +cgs);
        }
        
        
        /***************************** Total Amount ***************************/
       function total()
            {
                var tota = (+taxAbl+ +tax);
                $('.totalS').text(tota.toFixed(2));
                $('.total').val(tota.toFixed(2));
            }
        total();
        /***************************** In Words ***************************************/
        var a = ['', 'One ', 'Two ', 'Three ', 'Four ', 'Five ', 'Six ', 'Seven ', 'Eight ', 'Nine ', 'Ten ', 'Eleven ', 'Twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
		var b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
		inWords($('.total').val());

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
            
            if ((numAft = after).length > 9) return 'overflow';
            n = ('000000000' + numAft).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
            if (!n) return;
            var strAft = '';
            strAft += (n[5] != 0) ?  (a[Number(n[5])] || a[n[5][0]] + '' + a[n[5][1]]) + 'Only' : '';

            var inAllWords = str + "Point " + strAft;
            $('.tIW').val(str);
        }
        
    });
});
