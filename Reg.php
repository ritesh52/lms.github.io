<?php

session_start();
header('location:login.php');
$username ="root";
$password ="";
$server= "localhost";
$db="lms";

$con =mysqli_connect($server,$username,$password,$db);
if($con){
   echo"Connection Successful";
}else{
    echo"no connection";
}
mysqli_select_db($con,'lms');

if(isset($_POST['Submit'])){

$name=$_POST['Name'];
$email=$_POST['Email'];
$Phone=$_POST['Phone'];
$City=$_POST['City'];
$password=$_POST['Password'];


$q="select * from Registration WHERE Email='$email' && Password ='$password' ";

$result= mysqli_query($con,$q); 
$num= mysqli_num_rows($result);

if($num ==1){
    echo"User already Exist";
}else{
    $qu ="insert into Registration(Name,Email,Phone,City,Password) values 
    ('$name','$email','$Phone','$City','$password')";
    mysqli_query($con,$qu);
}
}
?>
