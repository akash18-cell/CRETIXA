<?php
session_start(); 
$server ="localhost";
$username ="root";
$password ="";
$dbname ="mavshi1";


//echo $email;
//$email = "dnyangroup@gmail.com";
$con = mysqli_connect($server, $username, $password, $dbname);
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail= new PHPMailer(true);


$alert='';

if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $location = $_POST['location'];


 $sql ="INSERT INTO `user_info`(`name`, `phone`, `location`) 
  VALUES ('$name',' $phone ','$location')";

 $result=mysqli_query($con,$sql);


   
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='akashvpatil02@gmail.com';
        $mail->Password='bdfcbeybjhnweuwv';
        $mail->SMTPSecure="tls";
        $mail->Post='587';
        $mail->setFrom('akashvpatil02@gmail.com');
        $mail->addAddress('akashvpatil02@gmail.com');
        $mail->isHTML(true);
        $mail->Subject='Mail recieved from Mavshi.in';
        $mail->Body="Name: $name <br> Phone: $phone <br> loaction: $location <br>";
        if($mail->send()){
            header("Location: thank_you.php");
        }
        else{
            echo "Error Occur";
        }
        

        $alert="<div class='alert-success'><span>Message Send Successfully</span></div>";
    
}
?>