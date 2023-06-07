<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="dash.css" class="css">
</head>
<body>
<div class="Regs">
<div class="logs">
    <h2>Register here</h2>
    <form id="user" action="Reg.php" method="post">
    <label>Name: </label>
    <br>
    <input type="text" name="Name" id="user" placeholder="Enter your Name">
    <br><br>
    <label>Email: </label>
    <br>
    <input type="email" name="Email" id="user" placeholder="Enter your eMail">
    <br><br>  
    <label>Phone Number: </label>
    <br>
    <input type="Number" name="Phone" id="user" placeholder="Enter your Phone Number">
    <br><br>
    <label>City: </label>
    <br>
    <input type="text" name="City" id="user" placeholder="Enter your City">
    <br><br>
    <label>Password: </label>
    <br>
    <input type="Password" name="Password" id="user" placeholder="Create a password">
    <br><br>    
    <input type="Submit" value="Submit" name="Submit" id="Submit">
    </form>
</div>
</div>
</body>
</html>