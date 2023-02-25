
<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="mavshi1";

$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con)
{
    echo "Not connected!";
}
else{
    echo "Connected";
}
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $location = $_POST['location'];
 $city = $_POST['city'];
 $error=array();

 $sql ="INSERT INTO `user_info`(`name`, `phone`, `location`) 
  VALUES ('$name',' $phone ','$location')";

 $result=mysqli_query($con,$sql);


if($result){
    

     header("location: thank_you.php");
 }
 else{
    echo "Error";
}
    
?>