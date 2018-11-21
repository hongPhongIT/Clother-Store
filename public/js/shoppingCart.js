/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $(".addByOne").click(function () {
        var id = $(this).attr('pro_id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "deduct/" + id,
            type: "GET",
            data: {
                id: id,
            },
            success: function (data) {
                console.log(data);
                if (data.totalQty != undefined) {
                    $('#cart_num').html(data.totalQty);
                    $('.cart_num').html(data.totalQty + '  item');
                }
                if (data.totalPrice != undefined) {
                    $('.totalPrice').html(data.totalPrice);
                }
                if (data.price != undefined) {
                    $('.price' + id).html(data.price);
                }
                if (data.qty != undefined) {
                    $('.qty' + id).html(data.qty);
                }
            }
        });
    });

});

$(document).ready(function () {

    $(".remove_item").click(function () {
        var id = $(this).attr('pro_id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.Notifier("Remove from cart",
                "Item(s) will be removed from order",
                "warning",
                {
                    vertical_align: "center",
                    rtl: false,
                    has_icon: false,
                    btns: [
                        {
                            label: "Remove",
                            type: "success",
                            onClick: function () {

                                $.ajax({
                                    url: "delete/" + id,
                                    type: "GET",
                                    data: {
                                        id: id,
                                    },
                                    success: function (data) {
                                        console.log(data);
                                        if (data.totalQty != undefined) {
                                            $('#cart_num').html(data.totalQty);
                                        }
                                        if (data.totalPrice != undefined) {
                                            $('.totalPrice').html(data.totalPrice);
                                        }
                                        $('.item' + id).html('');
                                        if (data.totalQty <= 0) {
                                            $("#check-out-container").empty();
                                        }
                                        $("#notification-content").empty();
                                        $("#notification-content").show();
                                        $("#notification-content").append("<div class='alert alert-success'>"
                                                + "<button data-dismiss='alert' class='close'>×</button>"
                                                + "Bạn đã xóa sản phẩm <b>" + data.productName + "</b> khỏi giỏ hàng thành công </div>");
                                        $("#notification-content").delay(10000).fadeOut();
                                    }
                                });

                                return true;
                            }
                        },
                        {
                            label: "Cancel",
                            type: "default",
                            onClick: function () {
                            }
                        }
                    ],
                    callback: function () { }
                });

    });
});

$(document).ready(function () {
    $("#input-cus-info").click(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "checkout",
            type: "GET",
            success: function (data) {
                $('#product_customer').html('');
                $('#product_customer').append(data);
            }
        });
    });
});

