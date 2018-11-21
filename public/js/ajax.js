
//display modal form for product editing

//display modal form for creating new product

//delete product and remove it from list

//create new product / update existing product
$("#btn-save").click(function (e) {
    $.ajaxSetup({
        headers: {
            //  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            'X-CSRF-TOKEN': $('#comment-product-form-token').val()
        }
    })
    e.preventDefault();
    var formData = {
        comment: $('#comment').val(),

    }
    //used to determine the http verb to use [add=POST], [update=PUT]
    var state = $('#btn-save').val();
    var type = "POST"; //for creating new resource



    console.log(formData);
  
    $.ajax({
        type: "POST",
        url: "addComment",
        data: {  comment: $('#comment').val(),
                 product_id: $('#btn-save').val() },
        
        dataType: 'json',
        success: function (data) {

alert("Thank you for you ");
            console.log(data);
            var product =
                    ' <table class="table">'
                    + '     <thead>' + ' <tr class="info">'
                    + ' <th>' + 'You:' + '</th>'
                    + ' <th>' + data.content + '</th>'
                    + '<th>' + data.created_at + '</th>';
            +'  </t                                                                                                                                                                                                                                                                                                                                       r>'
                    + '  </thead>'
                    + ' </table>';
            $('#frmProducts').append(product);
          

        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});



//    
//    
//    
//        var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + data.content + '</td>'+
//                 ' <table class="table">'
//   +'     <thead>'
//
//
//            
//         +  ' <tr class="info">'
//
//
//           +    ' <th>'+  data.content+'</th>'
//               
//            +    '<th>'+data.content+'</th>'
//
//
//
// 
//      +    '  </tr>'
//      +'  </thead>'
//   +' </table>'
//                $('#frmProducts').append(product);
//                     alert("Thank you for you ");
//               
//            },


