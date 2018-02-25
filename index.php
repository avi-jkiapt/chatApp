<?php 
 include 'connect.php';
 
?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Chat Here</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/master.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./js/master.js"></script>
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        
    </head>
    <body onload="livechat();">
        <h1 style="color:green;text-align:center;">Hello Everyone, We are happy to help you!!!</h1>
        
        <div class="button_open"> 
             <i class="fas fa-5x fa-comment-alt"></i>
        </div>
        <div id="chat_box">
            <div id="hmm">
                <div id="chat_title">
                     <span id="head_chat">Chat with Us!!</span>
                     <span id="cross"> &nbsp; X &nbsp; </span>
                     <hr class="horizontal">
                </div>
               
                <div id="chat_body" >
                 
                </div>
               
            </div>    
             <form action="index.php" method="POST">
                 <input type="text" name="name" placeholder="Name" />
                 <input type="textarea" name="message" placeholder="Type a message.." />
                 <input type="submit" name="submit" value="Submit"/>
             </form>
             <?php 
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $message= $_POST['message'];
                    $query = "INSERT INTO chatting (name, message) values ('$name', '$message')" or die(mysql_error());
                    $run = $db->query($query);
                    
                }
               
              ?>
        </div>
        
    </body>
</html>