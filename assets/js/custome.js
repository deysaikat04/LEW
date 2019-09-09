$(function() {
//    
var form = $(".steps-basic").show();
$(".steps-basic").steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="number">#index#</span> #title#',
        labels: {
            finish: 'Submit'
        },
        onStepChanging: function (event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }

            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {

                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }

            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
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
                event.preventDefault(); // avoid to execute the actual submit of the form.
//            });
        }
    });
    
    /****************Validation*********************/
    // Initialize validation
    $(".steps-basic").validate({
        ignore: 'input[type=hidden]', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },

        // Different components require proper error label placement
        errorPlacement: function(error, element) {

            // Styled checkboxes, radios, bootstrap switch
            if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container') ) {
                if(element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo( element.parent().parent().parent().parent() );
                }
                 else {
                    error.appendTo( element.parent().parent().parent().parent().parent() );
                }
            }

            // Unstyled checkboxes, radios
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                error.appendTo( element.parent().parent().parent() );
            }

            // Input with icons and Select2
            else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo( element.parent() );
            }

            // Inline checkboxes, radios
            else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                error.appendTo( element.parent().parent() );
            }

            // Input group, styled file input
            else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                error.appendTo( element.parent().parent() );
            }

            else {
                error.insertAfter(element);
            }
        },
        rules: {
            email: {
                email: true
            }
        }
    });
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
    '<td><select style="width: 85px" name="unit[]" class="form-control unit"><option value="Each">Each</option><option value="Feet">Feet</option></select></td>'+
	'<td><input type="text" name="rp[]" class="form-control rp"></td>'+
	'<td><input type="text" name="hsn[]" class="form-control hsn"></td>'+
    '<td><input type="text" name="desp[]" class="form-control desp"></td>'+
	'<td><input type="text" name="len[]" class="form-control len"></td>'+
    '<td><input type="text" name="rate[]" class="form-control rate"></td>'+
	
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
    $('.steps-basic').on('keyup change', '.qnty, .rp, .rate, .len, .noOfBeg, .totalS, .igst, .sgst, .cgst, .txtype, .pkg, .postg, .base_unit_1, .unit', function() {
        var taxAbl;        
        var tax;
        var sgs;
        var cgs;
        var amount; // added
        var tr = $(this).parent().parent();
		var qnty = tr.find('.qnty').val();
		var rp = tr.find('.rp').val();
		var len = tr.find('.len').val(); 
        var unit = tr.find('.unit').val(); // added new
        var rate = tr.find('.rate').val();
        /*var rate = len/12*rp;
        var amount = rate*qnty;
        tr.find('.rate').val(rate.toFixed(2)); 
        tr.find('.amnt').val(amount.toFixed(2)); */
        
    /*****************************Amount***********************************/
    function cal() 
    {
            var Feet = "Feet";
            var Each = "Each";
            if (unit === Each) 
            {   
                amount = qnty * rate;
            }   
           else if (unit === Feet) 
            {   
               rate = len/12*rp;
               amount = rate*qnty;
            }        
             //tr.find('.rate').val(rate);
             tr.find('.rate').val(rate);
             tr.find('.amnt').val(amount);
    }
    cal();
   


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
                var postage = $('.postg').val();
                var tota = (+taxAbl+ +tax+ +postage);
                $('.totalS').text(tota.toFixed(2));
                $('.total').val(tota.toFixed(2));


            }
        total();
        /***************************** In Words ***************************************/
        var a = [ '','One ', 'Two ', 'Three ', 'Four ', 'Five ', 'Six ', 'Seven ', 'Eight ', 'Nine ', 'Ten ', 'Eleven ', 'Twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
		var b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
		

		function inWords(num) {
            var before = num.toString().split(".")[0];
            var after = num.toString().split(".")[1];

            if ((num = before).length > 9) return 'overflow';
            n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
            if (!n) return;
            var str = '';
            str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
            str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
            str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
            str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
            str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) : '';          
            

            var inAllWords = str + "Only";
            $('.tIW').val(inAllWords);
            
        }
        // $('.tIW').val(toWords);
        inWords($('.total').val());
  
    });
});
