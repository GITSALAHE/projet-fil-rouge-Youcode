<?php
  // isset button SendMail 

if(isset($_POST['SendMail'])){

   
        if(!empty($_POST['name'] || $_POST['subject'] || $_POST['email'] || $_POST['message'])){

        
            $message="";
            $to = "elhadkimariem3@gmail.com"; // this is your Email address
            $from =$_POST['email']; // this is the sender's Email address
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $email=  $_POST['email'];
            $message= $_POST['message'];
            $message = "Client: " .$name . "\n\n son Email est :" .$email."\n\n a dit:" . "\n\n" .$message;
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
        
            $Message="Thanks for contacting us! We will be in touch with you shortly."; 
               
        }
    
        else {

            $Error="Please complete all fields";
        }
}
?>