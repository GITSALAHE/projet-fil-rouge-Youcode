<?php
  // isset button SendMail 

if(isset($_POST['SendMail'])){

   
        if(!empty($_POST['name'] || $_POST['subject'] || $_POST['message'])){

        
            $message="";
            $to = "elhadkimariem3@gmail.com"; // this is your Email address
            $from = "elhadkimariem3@gmail.com"; // this is the sender's Email address
            $name = $_POST['name'];
            $message= $_POST['message'];
            $subject = $_POST['subject'];
            $message = "Client: " .$name . "\n\n a dit:" . "\n\n" .$message;
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
        
            $Message="Thanks for contacting us! We will be in touch with you shortly."; 
               
        }
    
        else {

            $Error="Please complete all fields";
        }
}
?>