
$(document).on('submit', '#form-login', function (event) {
    event.preventDefault();
    /* Act on the event */
    var un = $('#username1').val();
    var pw = $('#password1').val();
    $.ajax({
        url: 'user_login.php',
        type: 'post',
        dataType: 'json',
        data: {
            un: un,
            pw: pw
        },
        success: function (data) {
            console.log(data);
            if (data.valid == true) {
                window.location = data.url;
            } else {
                $('label[id="redal"]').text(" Invalid Username / Password!").css("color", "red");
             //   alert('Invalid Username / Password!');
            }
        },
        error: function (data) {
            console.log(data);
       //     alert('Error: Login');
        }
    });//end a req
});

function chkmobb(){
    var mno = $('#mno').val();
    if(mno.length > 9) {
         $.ajax({
        url: 'otpgen.php',
         type: 'post',
            dataType: 'json',
            data: {
                mno:mno
            },  
            success: function (data) {
            console.log(data);
            if (data.valid == true) {
                $('#otpnum').val(''); 
                        $('#omno').val(mno); 
                        $('#modal-otp').find('.modal-title').text('OTP Verfication!');
                        $('#modal-otp').modal('show');

            }
        },
        error: function (data) {
            console.log(data);
        }
    });
    } else{
          $('#modal-msg').find('.modal-title').text('Insert Valid Mobile Number!');
                        $('#modal-msg').modal('show');

    }
}
$(document).on('submit', '#form-otp', function (event) {
    event.preventDefault();
    /* Act on the event */ 
    var mno = $('#omno').val();
    var otpnum = $('#otpnum').val();
    $.ajax({
        url: 'otpver.php',
        type: 'post',
        dataType: 'json',
        data: { 
            mno:mno,
            otpnum: otpnum
        },
        success: function (data) {
           console.log(data);
            $('#modal-otp').modal('hide');
            if (data.valid == true) { 
                $('#modal-msg').find('.modal-title').text('Registration Successfully!');
                $('#modal-msg').modal('show');
                $('#message-box-ok').on('click', function (event) {
                    window.location = 'newrfid.php?kj='.mno;
                });                
            } else {
                $('#modal-msg').find('#msg-body').text('Invalid OTP!');
                $('#modal-msg').modal('show');
            }
        },
        error: function (data) {
            console.log(data);
        }
    });//end a req

});

$(document).on('submit', '#form-rfid', function (event) {
    event.preventDefault();
    /* Act on the event */ 
    var mno = $('#mno').val();
    var rfid = $('#rfid').val();
    $.ajax({
        url: 'rfids.php',
        type: 'post',
        dataType: 'json',
        data: { 
            mno:mno,
            rfid: rfid
        },
        success: function (data) {
//             console.log(data);
            if (data.valid == true) { 
                $('#modal-msg').find('.modal-title').text('Registration Successfully!');
                $('#modal-msg').modal('show');
                $('#message-box-ok').on('click', function (event) {
                    window.location = 'newrfid.php';
                });                
            } else {
                $('#modal-msg').find('#msg-body').text('Try Again!');
                $('#modal-msg').modal('show');
            }
        },
        error: function (data) {
           console.log(data);
        }
    });//end a req

});

$(document).on('submit', '#form-product', function (event) {
    event.preventDefault();
    /* Act on the event */
    var name = $('#p_name').val();
    var code = $('#p_code').val();
    var mrp = $('#mrp').val();
    var sell = $('#sell').val();
    
    var file_data = jQuery("#p_image").prop("files")[0];
    var form = $('form-product')[0];
    var formData = new FormData();
formData.append('file_data', file_data);
    formData.append('code', code);
    formData.append('name', name);
    formData.append('mrp', mrp);
    formData.append('sell', sell);
    
    $.ajax({
        url: 'product.php',
         type: 'post',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
           success: function (data) {
            console.log(data);
            if (data.valid == true) {
                $('#modal-msg').find('#msg-body').text("Product Created Successfully!");
                $('#modal-msg').modal('show');
                $('#message-box-ok').on('click', function (event) {
                    window.location = 'Add_product.php';
                });

            }
        },
        error: function (data) {
            console.log(data);
        }
    });//end a req
});


$(document).on('submit', '#form-coupon', function (event) {
    event.preventDefault();
    /* Act on the event */
    var code = $('#p_code').val();
    var c_code = $('#c_code').val();
    var sdate = $('#sdate').val();
    var edate = $('#edate').val();
    var discount = $('#discount').val();
    var dvalue = $('#dvalue').val();

    
    $.ajax({
        url: 'coupon.php',
         type: 'post',
            dataType: 'json',
            data: {
                c_code: c_code,
                code: code,
                sdate: sdate,
                edate: edate,
                discount: discount,
                dvalue: dvalue
            },
           success: function (data) {
            console.log(data);
            if (data.valid == true) {
                $('#modal-msg').find('#msg-body').text("Coupon Added Successfully!");
                $('#modal-msg').modal('show');
                $('#message-box-ok').on('click', function (event) {
                    window.location = 'Add_coupon.php';
                });

            }
        },
        error: function (data) {
            console.log(data);
        }
    });//end a req
});