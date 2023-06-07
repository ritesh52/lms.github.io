<?php

session_start();

$username ="root";
$password ="";
$server= "localhost";
$db="lms";

$con =mysqli_connect($server,$username,$password,$db);

mysqli_select_db($con,'lms');

if(isset($_POST['Submit'])){

$email=$_POST['Email'];
$service=$_POST['Service'];
$quantity=$_POST['Quantity'];
$pickup=$_POST['Pickup'];


$q="select * from requests WHERE Email='$email' ";

$result= mysqli_query($con,$q); 
$num= mysqli_num_rows($result);

if($num ==1){
    echo "Sorry your data is not submitted ";
}else{
    $qu ="insert into Requests(Email,Service,Quantity,Pickup) values 
    ('$email','$service','$quantity','$pickup')";
    mysqli_query($con,$qu);
    echo'<script>alert("Successfully Submitted")</script>';
}
}
?>
