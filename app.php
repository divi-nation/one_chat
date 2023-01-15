
<?php
require_once "handlers/conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>

    



    </script>
    <script>
        $(document).ready(function reload(){
                 setTimeout(() => { 
                    console.log("buton was clicke")
                    $("#chat_container").load("php_scripts/load_chat.php")
                    reload();
                 }, 5000);

              
              
         });
    </script>
 
 
  
</head>
<body>
    <div class="container">

        <div class="content">
            <div class="chat">

                <div id= "chat_container" class="chats_container">

                </div>


                <div class="type_area">
                    <input class="message" type="text">
                    <button id="btn"></button>
                </div>
                <div class="chat_prompt" onclick="initiate_chat()"></div>
            </div>
            <div class="streak">
                <div class="info">
                    <span>New Unseen Streak</span>
                    <button>View</button>


                </div>

                <div class="add_streak" onclick="add_items('.upload_streak')"></div>
                <div class="upload_streak">
                    <form action="handlers/chat_handler.php" method="post">
                        <div class="image">
                            <input type="file">
                         </div>

                        <div class="caption">
                            <input type="text">
                        </div>
                    </form>
                    <div class="send">

                    </div>

                </div>
            </div>
        </div>

 


        <div class="bottom_navigation">
            <div class="tab" onclick="remove_items('.content'); untag_items('.chat_prompt'); untag_items('.chat'); remove_items('.upload_streak')"></div>
            <div class="tab" onclick="add_items('.content'); tag_items('.chat_prompt'); tag_items('.chat'); remove_items('.upload_streak')"></div>

         </div>
 



    </div>




  
    
    <script>
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
                     console.log(message);
                     console.log("fiinalysodfosuifj");

  
                 }
            })
              
        })

    </script>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="javascript/index.js"></script>
    <!-- <script src="javascript/chat.js"></script> -->


    
</body>
</html>


