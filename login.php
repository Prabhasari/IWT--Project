<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // read from database
        $query = "select * from signup where Email = '$email' limit 1";

        $result=mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
         {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['Password'] === $password)
            {
                $_SESSION['User_ID'] = $user_data['User_ID'];
                header('Location: index.php');
                die;
            }

         }
            
        }
        
            echo"Wrong Username and Password";
    } else {
        echo "Please enter valid information!";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>STOXIE</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        
        <div class="logincontainer">
            <div class="login-main-box">
                <h1>Log In</h1>
                <form action="login.php" method="POST">
                     <div class="login-input-box">
                        <span class="input-icon"><i class="bx bxs-envelope"></i></span>
                        <input name= "email" type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="login-input-box">
                        <span class="input-icon"><i class="bx bxs-lock-alt"></i></span>
                        <input name="password" type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="login-ckeck">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forget Password</a>
                    </div>

                    <button type="submit" class="login-btn">Login</button>

                    <div class="login-register">
                        <p>Don't have an Account?<a href="signup.php" class="register-link">Sign Up</a></p>
                    </div>
                </form>

            </div>


        </div>
    
        
    </body>
</html>