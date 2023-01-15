<?php
//HEAD
$css_link_1 = "general.css";
$css_link_2 = "index.css";

$js_link_1 = "index.js";
require_once "components/html_head.php";

?>

<!-- BODY -->
<body>
    <div class="container">
        <div class="matrix" >
            <div class="screen s1 active">
                <div class="logo">

                </div>

                <div class="accounts ltt cen">
                    <div class="acc">
                        Sign In
                    </div>
                    <div class="acc" onclick="toggle_items('.pop_up')">
                        Create Account
                    </div>

                </div>

                <div class="platforms grid">

                </div>
                <p>sign into an existing accounts</p>


                <div class="pop_up cen">
                    <div class="close_pop_up">
                        
                    </div>
                    <input class="create" type="text" placeholder="Name ie.[Kevin Macs]">
                    <input class="create" type="text" placeholder="Phone ie.[0501234499]">
                    <button class="create">Create</button>

                </div>

            </div>
            <div class="screen s2"></div>
            <div class="screen s3"></div>
            <div class="screen s4"></div>

        </div>
    </div>




</body>
