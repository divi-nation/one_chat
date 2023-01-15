$("#btn").click(() => {
    var message = $(".message").val();

    //ajax
    $.ajax({
        
        type : 'post',
        url: 'handlers/chat_handler.php',
        data: {
            'message': message,
         },
         success: function(resp){
            $(".message").empty();

            refresh();

         }
    })
      
})