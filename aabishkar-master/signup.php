<?php 
    if($_POST)
    {
       $fname = $_POST['firstName'];
       $lname = $_POST['lastName'];
       $country = $_POST['country'];
       $email = $_POST['email'];
       $pwd = $_POST['password'];
       $re_pwd = $_POST['re-password'];

       if($fname=='' || $fname==null)
       {
           $fname_error = 'First name cannot be blank.';
       }
       if($lname=='' || $lname==null)
       {
           $lname_error = 'You must enter your surname.';
       }
       if($country=='' || null)
       {
           $country_error = 'Country must be entered.';
       }
       if($pwd != $re_pwd)
       {
           $pwd_error = 'Re-password did not match.';
       }
    }

// TODO DB connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'aabishkar';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "INSERT INTO aabishkar_users (firstname, lastname, email)
VALUES ('$fname','$lname','$email')";

if($conn->query($sql)==True){
    echo "New record created successfully!";
}
else{
    echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .input_error{color:red}
    </style>
</head>
<link rel="stylesheet" href="signup.css">
<body>
<div class="main-div">
    <h1 >Signup</h1>
    <form action="#" method="POST">
        <div class="boxes">
            <input type="text"required name="firstName" >
            <label>First Name</label>
            <div class="input_error">
                <?php if(isset($fname_error)){
                    echo $fname_error;
                }?>
            </div>
        </div>

        <div class="boxes">
            <input type="text" required name="lastname" >
            <label>Last Name</label>
            <div class="input_error">
                <?php if(isset($fname_error)){
                    echo $fname_error;
                }?>
            </div>
        </div>


        <div class="boxes">
            <input type="text" required name="country">
            <label>Country</label>
            <div class="input_error">
                <?php if(isset($country_error)){
                    echo $country_error;
                }?>
            </div>
        </div>


        <div class="boxes">
            <input type="email"  name="email" required >
            <label>E-Mail</label>
        </div>


        <div class="boxes">
            <input type="password"  name="password" required >
            <label>Password</label>
        </div>
        <div class="boxes">
            <input type="password"  name="re-password" required >
            <label>Re-Enter Password</label>
            <div class="input_error">
                <?php if(isset($pwd_error)){
                    echo $pwd_error;
                }?>
            </div>
        </div>

            
            <input type="submit" value="Submit" class="submit-btn">
    </form>

</div>
    
</body>
</html>