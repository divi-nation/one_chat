<?php
require_once "../handlers/conn.php";



$query = "select * from chats";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    
    while ($row = mysqli_fetch_assoc($result)){
        echo '

        <div class="bubble sender">
            '.$row['message'].'
        <div class="line l1"></div>
        </div>

        <div class="bubble receiver">
        iooi soif jono nk
        <div class="line l2"></div>

        </div>
        
        
        ';

    }
   
}

else{
    echo "no chats"; 
}

?>