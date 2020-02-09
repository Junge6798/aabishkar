<?php 
    if($_POST)
    {
       $fname = $_POST['firstName'];
       $lname = $_POST['lastName'];
       $country = $_POST['country'];
       $email = $_POST['email'];
       $pwd = md5($_POST['password']);
       $re_pwd = md5($_POST['re-password']);

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
    
       if($pwd==$re_pwd){
            
            // for db connection
            include "../db-connect.php";

            $sql = "SELECT * from aabishkar_users where email='$email'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<h1>Sorry, email aready exist.</h1>";
            }
            else{
                $sql = "INSERT INTO aabishkar_users (firstname, lastname, email, password)
            VALUES ('$fname','$lname','$email','$pwd')";

            if($conn->query($sql)==True){
                echo "<h1>New record created successfully!</h1>";
            }
            else{
                echo "Error: ".$sql."<br>".$conn->error;
            }
            $conn->close();
            }
            
       }else{
        $pwd_error = 'Re-password did not match.';
       }
    }
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
            <input type="text" required name="lastName" >
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
    <div class="dont">Already Have an Account?</div>
    <div class="sign-up-bottom"><a href="../login/index.php">Sign In</a></div>

</div>
    
</body>
</html>