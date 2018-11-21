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
            url: "register",
            type: "POST",
            data: {
                name: $("#name-s").val(),
                email: $("#email-s").val(), 
                password: $("#password-s").val(), 
                password_confirmation: $("#password_r-s").val(),
            },
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    if (data.message.email != undefined) {
                        $('#emailerror').html(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('#passworderror').html(data.message.password[0]);
                    }
                    if (data.message.name != undefined) {
                        $('#errorname').html(data.message.name[0]);
                    }
                } else {
                        $('#ok').html(data.message);
                }
            }
        });
    });
});
