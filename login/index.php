<?php 
$id='';
if($_POST){
    $uname = $_POST['username'];
    $pwd = md5($_POST['password']);

    // for db connection
    include "../db-connect.php";
    
    // our sql query
    $sql = "SELECT * from aabishkar_users where email='$uname' && password='$pwd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $id = $row['id'];
           session_start();
           $_SESSION['user']=$row['email'];
           $sessionName = $_SESSION['user'];
           $_SESSION['id']=$id;
        header('Location:../gallery/index.php');
            
        }
    } else {
       $login_error = "user name or password not matched";
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>L O G I N</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
 
    
    <div class="container">
           
<?php if(isset($login_error)){ ?> 
    <div style="color:red"><?php echo $login_error; ?></div> <?php } ?>
        <h1>Log In</h1>
        <form method="POST" action="#">
        <!-- <form method="POST" action="#"> -->
            <div class="inputbox">
                <input type="text" required name="username">
                <label>Username</label>
            </div>

            <div class="inputbox">
                <input type="password" required name="password">
            <label>Password</label>
            </div>
            
            <input type="submit" name="" value="Submit">
        </form>
        <div class="forget"><a href="#" class="forget-link">Forget Password ?</a> </div>
        <div class="dont">Don't Have an Account?</div>
        <div class="sign-up-bottom"><a href="../signup/index.php">Sign Up</a></div>
    </div>
    
</body>
</html>