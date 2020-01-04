
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
                alert('Invalid Username / Password!');
            }
        },
        error: function (data) {
            console.log(data);
            alert('Error: Login');
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