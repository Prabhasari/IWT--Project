<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $DOB = $_POST['DOB'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $phone = $_POST['phoneno'];

    if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($address) && !empty($DOB) && !empty($password) && !empty($cpassword) && !empty($gender)) {
        // save to database
        $User_ID = random_num(20);
        $query = "INSERT INTO signup (F_Name, L_Name, Email, Address, DOB, Password, Gender,Phone,User_ID) VALUES ('$firstname', '$lastname', '$email', '$address', '$DOB', '$password', '$gender','$phone','$User_ID')";

        mysqli_query($conn, $query);
        header("Location: login.php");
        die;

    } else {
        echo "Please enter valid information!";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>STOXIE</title>
        <link rel="stylesheet" href="css/register.css">
        <script defer src="javascript/register.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <body>
    <div class="signupcontainer">
      <div class="signup-main-box">
        <h1>Registration</h1>
        <form id="form" action="#" method="POST">
          <div class="signup_input_box">
            <span class="input-icon"><i class="bx bxs-user"></i></span>
            <input name="firstname" id="fname" class="name" type="text" />
            <label>Firstname</label>
            <div class="error"></div>
          </div>

          <div class="signup_input_box">
            <span class="input-icon"><i class="bx bxs-user"></i></span>
            <input name="lastname" id="lname" class="name" type="text" />
            <label>Lastname</label>
            <div class="error"></div>
          </div>

          <div class="signup_input_box">
            <span class="input-icon"><i class="bx bxs-envelope"></i></span>
            <input name="email" id="email" class="text-name" type="text" />
            <label>Email</label>
            <div class="error"></div>
          </div>

          <div class="signup_input_box">
            <span class="input-icon"><i class="bx bxs-home"></i></span>
            <input name="address" id="address" class="text-name" type="text" />
            <label>Address</label>
            <div class="error"></div>
          </div>

          <div class="signup_input_box">
            <span class="input-icon"><i class="bx bxs-phone"></i></span>
            <input
              name="phoneno"
              id="phoneno"
              class="text-name"
              type="number"
            />
            <label>Mobile Number</label>
            <div class="error"></div>
          </div>

          <div class="signup_input_box">
            <span class="input-icon"></i></span>
            <input name="DOB" id="DOB" class="text-name" type="date" />
            <label>Date of Birth</label>
            <div class="error"></div>
          </div>

          <div class="signup_input_box">
            <span class="input-icon"><i class="bx bxs-lock-alt"></i></span>
            <input
              name="password"
              id="password"
              class="text-name"
              type="password"
            />
            <label>Password</label>
            <div class="error"></div>
          </div>

          <div class="signup_input_box">
            <span class="input-icon"><i class="bx bxs-lock-alt"></i></span>
            <input
              name="cpassword"
              id="cpassword"
              class="text-name"
              type="password"
            />
            <label>Confirm Password</label>
            <div class="error"></div>
          </div>

          <div class="radio-container">
            <div class="radio-title-group">
              <div class="radio-input-container">
                <input id="male" type="radio" name="gender" value="Male" />
                <div class="radio-title">
                  <i class="bx bx-male"></i>
                  <label for="male">Male</label>
                </div>
              </div>

              <div class="radio-input-container">
                <input id="female" type="radio" name="gender" value="Female" />
                <div class="radio-title">
                  <i class="bx bx-female"></i>
                  <label for="female">Female</label>
                </div>
              </div>

              <div class="radio-input-container">
                <input id="other" type="radio" name="gender" value="other" />
                <div class="radio-title">
                  <label for="other">Other</label>
                </div>
              </div>
            </div>
          </div>
          <div class="terms">
            <label>
              <input type="Checkbox" checked="checked" />
              <span></span>
            </label>
            <p>I accept Terms and Condition</p>
          </div>

          <button type="submit" class="login-btn">Sign Up</button>

          <div class="login-register">
            <p>
              Have an Account?<a href="login.php" class="register-link">Login Up</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    

    </body>
</html>