<?php

session_start();

$username ="root";
$password ="";
$server= "localhost";
$db="lms";

$con =mysqli_connect($server,$username,$password,$db);
//if($con){
//   echo"Connection Successful";

//}else{
//    echo"no connection";
//}
mysqli_select_db($con,'lms');

if(isset($_POST['Login'])){

    $email=$_POST['Email'];
    $Password=$_POST['Password'];

$q="select * from registration where Email='$email' && Password ='$Password' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num ==1){
    $_SESSION['Email'] = $email;
    header('location:Dashboard.html');

}else{
    header('location:login.php');
}
}
?>
    