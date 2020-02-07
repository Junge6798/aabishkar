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


//TODO DB connection


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
<body>
    <h1>Signup</h1>
    <form action="#" method="POST">
            <input type="text" placeholder="First Name" name="firstName"><br>
            <div class="input_error">
                <?php if(isset($fname_error)){
                    echo $fname_error;
                }?>
            </div>
            <input type="text" placeholder="Last Name" name="lastName"><br>
            <div class="input_error">
                <?php if(isset($lname_error)){
                    echo $lname_error;
                }?>
            </div>
            <input type="text" placeholder="Country" name="country"><br>
            <div class="input_error">
                <?php if(isset($country_error)){
                    echo $country_error;
                }?>
            </div>
            <input type="email" placeholder="Email" name="email" required><br>
            <input type="password" placeholder="Password" name="password" required><br>
            <input type="password" placeholder="Re-enter password" name="re-password"><br>
            <div class="input_error">
                <?php if(isset($pwd_error)){
                    echo $pwd_error;
                }?>
            </div>
            <input type="submit" value="Submit">
    </form>
</body>
</html>