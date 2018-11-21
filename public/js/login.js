/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {


    $("#btn_submit").on("click", function (e) {
        e.preventDefault();

// Chạy ajax gửi thông tin username và password về server check_dang_nhap.php
// để kiểm tra thông tin đăng nhập hợp lệ hay chưa

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "login",
            type: "POST",
            data: {
                email: $("#email").val(),
                password: $("#password").val(),

            },
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    if (data.message.email != undefined) {
                        $('#emailerror').html(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('#passworderror').html(data.message.password[0])
                    } else {
                        $('#ok').html(data.message);
                    }
                }
            }
        });
    });
});



