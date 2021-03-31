<?php

if(isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['message'])){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    if(empty($name) || empty($mobile)|| empty($message)){
        echo"Please fill up all the fields";
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z\s]+$/",$name)){

        echo"<h5 style='color:red'>Please enter correct name</h5>";
        exit();


    }
    elseif(!preg_match("/^[0-9]{11}$/",$mobile)){
        echo"<h5 style='color:red'>Please enter valid number </h5>";
        exit();

    }



    include "includes/phpmailer/PHPMailerAutoload.php";

    $mail = new PHPMailer();

    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;     
    $mail->SMTPSecure ='tls';
    $mail->Port       = 587;                                // Enable SMTP authentication
    $mail->Username   = 'chowdhuryshohan@gmail.com';                     // SMTP username
    $mail->Password   = '01712630112';                               // SMTP password
                                   
    //Recipients
    $mail->setFrom('chowdhuryshohan@gmail.com',$name);
    $mail->addAddress('chowdhury889@gmail.com');          // Add a recipientl
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact messages';
    $mail->Body  = "
     <h4 text-align='center'>The message comes from skp gas service </h4>
     <p>Name : $name</p>
     <p>Mobile No : $mobile</p>
     <p>Message : $message</p>";

     if($mail->send()){
         echo"<h5 style='color: #0060AD'>Message sent</h5>";

     }
     else{
         echo"Try again later";
     }







}



