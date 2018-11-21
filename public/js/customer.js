
var city = '';
var district = '';
var town = '';
var email = '';
var name = '';
var phone = '';
function ctychange(obj) {
    city = obj.value;
}

function districtchange(obj) {
    district = obj.value;
}

function townchange(obj) {
    town = obj.value;
}

function emailonkeyup() {
    var email = document.getElementById("email-c").value;
    $('#name-c').val('');
    $('#phone').val('');
    $("#address").val('');
    $('select[name="city"]').val('');
    $('select[name="district"]').val('');
    $('select[name="town"]').val('');
    $('.error-name').show().text('');
    $('.error-phone').show().text('');
    $('.error-city').show().text('');
    $('.error-district').show().text('');
    $('.error-town').show().text('');
    $('.error-address').show().text('');
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (email == '') {
        $('.error-email').show().text('');
        $('.error-email').show().text("You can't leave this empty.");
        return (false);
    } else if (email.length <= 6 || email.length > 60) {
        $('.error-email').show().text('');
        $('.error-email').show().text("The length of the email should be 6-60 characters.");
        return (false);
    }
    if (reg.test(email) == false)
    {
        $('.error-email').show().text('');
        $('.error-email').show().text('Invalid Email Address');
        return (false);
    } else {
        $('.error-email').show().text('');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'check-customer/' + email,
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                $('#name-c').val(data.name);
                $('#phone').val(data.phone);
                $("#address").val(data.homeNum);
                $('select[name="city"]').val('' + data.city + '');
                $('select[name="district"]').val('' + data.district + '');
                $('select[name="town"]').val('' + data.town + '');
                city = data.city;
                district = data.district;
                town = data.town;
            }
        });
        return (true);
    }

}

function save()
{
    var email = document.getElementById("email-c").value;
    var name = document.getElementById("name-c").value;
    var phone = document.getElementById("phone").value;
    var homeNum = document.getElementById("address").value;
    var ship = document.getElementsByName("ship").value;
    var csrf_token = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: 'customer',
        type: 'POST',
        dataType: 'JSON',
        data: {
            email: email,
            name: name,
            phone: phone,
            homeNum: homeNum,
            city: city,
            district: district,
            town: town,
            ship: ship
        },
        success: function (data) {
            console.log(data);
            if (data.error != undefined) {
                if (data.error.email != undefined) {
                    $("#mail-error").addClass("has-error");
                    $('.error-email').show().text(data.error.email);
                } else {
                    $("#mail-error").removeClass("has-error");
                    $('.error-email').show().text(data.error.email);
                }
                if (data.error.name != undefined) {
                    $("#name-error").addClass("has-error");
                    $('.name-error').show().text(data.error.name);
                } else {

                }
                if (data.error.phone != undefined) {
                    $("#phone-error").addClass("has-error");
                    $('.phone-error').show().text(data.error.phone);
                } else {

                }
                if (data.error.homeNum != undefined) {
                    $("#homeNum-error").addClass("has-error");
                    $('.homeNum-error').show().text(data.error.homeNum);
                } else {
                    $("#homeNum-error").removeClass("has-error");
                    $('.homeNum-error').show().text('');
                }
                if (data.error.city != undefined) {
                    $("#city-error").addClass("has-error");
                    $('.city-error').show().text(data.error.city);
                } else {
                    $("#city-error").removeClass("has-error");
                    $('.city-error').show().text('');
                }
                if (data.error.district != undefined) {
                    $("#district-error").addClass("has-error");
                    $('.district-error').show().text(data.error.district);
                } else {
                    $("#district-error").removeClass("has-error");
                    $('.district-error').show().text('');
                }
                if (data.error.town != undefined) {
                    $("#town-error").addClass("has-error");
                    $('.town-error').show().text(data.error.town);
                } else {
                    $("#town-error").removeClass("has-error");
                    $('.town-error').show().text('');
                }
            } else {

                $.Notifier("",
                        "Your infomation is saved",
                        "success",
                        {
                            vertical_align: "center",
                            rtl: false,
                            has_icon: false,
                            btns: [
                                {
                                    label: "OK",
                                    type: "default",
                                    onClick: function () {
                                    }
                                }
                            ],
                            callback: function () { }
                        });

                $('#product_customer').html('');
                $('#delivery').html('<th ><span>Delivery To:</span></br></br>'
                        + '' + data.name + '</br>'
                        + '<span>' + data.homeNum + '</span></br>'
                        + '<span>' + data.town + ', ' + data.district + ', ' + data.city + '</span><br>'
                        + '<span>' + data.phone + '</span></th>'
                        + '<th>'
                        + '<form>'
//                        + '<input type="button" style="color: #337ab7;background-color: white;border: 0px" id="edit" value="Edit">'
                        + '</form>'
                        + '</th>');
                $('#payment').html('<form action="http://clothes-shop/checkout" method="POST">'
                        + '<input type="hidden" name="_token" value="' + csrf_token + '"/>'
                        + '<input hidden value="' + data.email + '" name="email">'
                        + '<input hidden value="' + data.name + '" name="name">'
                        + '<input hidden value="' + data.city + '" name="city">'
                        + '<input hidden value="' + data.district + '" name="district">'
                        + '<input hidden value="' + data.town + '" name="town">'
                        + '<input hidden value="' + data.homeNum + '" name="home">'
                        + '<input hidden value="' + data.phone + '" name="phone">'
                        + '<input hidden value="' + data.ship + '" name="ship"> '
                        + '<input type="submit" class="btn-danger" style="border: 0px;margin-left: 15px;width: 94%;height: 50px;background-color: #2fdab8" value="Payment processing">'
                        + '</form>')
            }
        }
    });
}
;
