$(document).ready(function () {

    $(".bill").click(function () {
        var id = $(this).attr('bill_id');
        $("#info_order" + id).removeClass("hidden");
    });

    $(".cancel_bill").click(function () {
        var id = $(this).attr('bill_id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.Notifier("Remove from Bill",
                "Bill will be removed from order",
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
                                    url: "history/" + id + "/edit",
                                    type: "GET",
                                    data: {
                                        id: id,
                                    },
                                    success: function (data) {
                                        console.log(data);
                                        if (data.success == 'success') {
                                            $('.' + id).html('');
                                            $("#notification-content").empty();
                                            $("#notification-content").show();
                                            $("#notification-content").append("<div class='alert alert-success'>"
                                                    + "<button data-dismiss='alert' class='close'>×</button>"
                                                    + "You are remove bill success</div>");
                                            $("#notification-content").delay(10000).fadeOut();
                                        }
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

