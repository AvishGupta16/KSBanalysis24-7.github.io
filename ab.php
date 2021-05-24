<?php

try{
    $db =new mysqli("localhost", "root", "", "contact_db");
}
 catch  (Exception $exc) {
    echo $exc->getTraceAsString();
 }

 if(isset($_POST['firstname']) && (isset($_POST['lastname']) && (isset($_POST['email']) && (isset($_POST['mobile'])) && (isset($_POST['message'])))))
 {
     $fisrtname = $_POST['first name'];
     $lastname = $_POST['last name'];
     $email = $_POST(['email']);
     $mobile = $_POST(['mobile']);
     $message = $_POST(['type your message here']);
     
     $query = " insert into data (`First Name`, `Last Name`, `Email`, `Mobile`, `Message`) values ('$fisrtname','$lastname','$email','$mobile','$message')"; 
     {
     if($is_insert == TRUE)
         {
         echo "<h2>Thanks, Your Request Has Submitted.</h2>";
         exit();
     }
 }
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Contact Us Form</title>
        <link rel="stylesheet" type="text/css" href="ab1.css">
    </head>
    <body>
       <div class="cointainer">
            <h2>Contact Us</h2>
            <div class="row100">
                <div class="col">
                    <div class="inputbox">
                        <input type="text"  name="firstname" required="required">
                        <span class="text">First Name</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputbox">
                        <input type="text"  name="lastname" required="required">
                        <span class="text">Last Name</span>
                        <span class="line"></span>
                    </div>
                </div> 
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputbox">
                        <input type="text"  name="email" required="required">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputbox">
                        <input type="text"  name="mobile" required="required">
                        <span class="text">Mobile</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputbox textarea">
                        <textarea name="message" required="required"></textarea>
                        <span class="text">Type Your Message Here.....</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>
    </body>
</html>
