$('.remove_photo').click( function(){
    var formid = $(this).attr('data-id');
    $("#form_" + formid).submit();
});


