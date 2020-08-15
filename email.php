<?php


if (isset($_POST['submit'])){


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


if ($name =="" || $email =="" || $message ==""){

    echo 'dsa';
 
}else{
   
    $email_from = "joycenyambura036@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "You have recived a new message from the user $name .\n email address : $email \n Here the message:\n $message".
    $to = "joycemuchema036@gmail.com";
    $headers = "From: $email";

    mail($to , $email , $email , $headers);

}


}

?>