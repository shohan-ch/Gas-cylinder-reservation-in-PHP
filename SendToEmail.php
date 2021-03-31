<?php

if(isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['tower']) && isset($_POST['flat']) && isset($_POST['unit'])){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $tower = $_POST['tower'];
    $flat = $_POST['flat'];
    $unit = $_POST['unit'];

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
    $mail->Subject = 'Gas Cylinder Order';
    $mail->Body    = "<h3 align='center'> New order From skp gas service </h3><br>
                      <h5 style='color:red'>Customer order Beximco gas price is 1050 taka</h5>
                      <p>Name : $name</p> 
                      <p>Mobile : $mobile</p>
                      <p>Tower : $tower</p> 
                      <p>Flat : $flat</p> 
                      <p>Unit : $unit</p>";
    


    if(empty($name) || empty($mobile) || empty($tower) || empty($flat) || empty($unit) ){

        echo "All fields are require";
        exit();


    }
  

    elseif(!preg_match("/^[a-zA-Z\s]+$/",$name)){
        echo "Please give correct name";
        exit();

    }
    elseif(!preg_match("/^[0-9]{11}$/",$mobile)){

        echo "Mobile Number is not valid please check!!";
        exit();

    }

    $towerArray = array("Shurma","Kushiaara","Piyaaain");
    if(!in_array($tower,$towerArray)){
        echo"Please choose tower name";
        exit();
    }


    elseif(!preg_match("/^[\d]{1}$/",$flat)){
        echo"Please choose correct flat number";
        exit();

    }

    $unitArray = array("A","B","C","D");
    if(!in_array($unit,$unitArray)){
        echo"Please choose unit name";
        exit();
    }


    
        if($mail->send()){
      
    
            echo"<p style='color:red;font-size:22px'>You have book gas cylinder</p>";
           
            
        } 
        else{
            echo "There is somethings wrong";
        }
     


}

