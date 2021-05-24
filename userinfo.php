<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
 else {
    echo "no connection";    
}
mysqli_select_db($con,'ksbanalysis');
        $user = $_POST['user'];
        $email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (user, email, mobile, comment) 
         values ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con,$query );

header('location:index.php');


        
?>



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

