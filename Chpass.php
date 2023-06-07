<?php

/*session_start();

$username ="root";
$password ="";
$server= "localhost";
$db="lms";

$con =mysqli_connect($server,$username,$password,$db);

mysqli_select_db($con,'lms');

if(isset($_POST['Login'])){

    $email=$_POST['Email'];
    $oldPassword=$_POST['Password'];
    $newPass=$_POST['NewPass'];

$q="select * from registration where Email='$email' && Password ='$Password' ";
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="dash.css" class="css">
</head>
<body>
<div class="Regs">
<div class="logs">
    <h2>Change Password</h2>
    <form action="#" id="user" method="post">
    <label>Email: </label>
    <br>
    <input type="email" name="email" id="user" placeholder="Enter your eMail">
    <br><br>  
    <label>Old Password: </label>
    <br>
    <input type="password" name="pass" id="user" placeholder="Enter Your Old password">
    <br><br>   
    <label>New Password: </label>
    <br>
    <input type="password" name="pass" id="user" placeholder="Enter Your New password">
    <br><br>
    <input type="Submit" value="Submit" name="Submits" id="Submits">

    </form>
    
</div>
</div>
</body>
</html>

