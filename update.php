<?php
include ("connection.php");

session_start();

$sql = mysqli_query($conn, "SELECT * FROM signup WHERE User_ID='" .$_SESSION['User_ID'] . "'");
$row = mysqli_fetch_array($sql);
if (is_array($row)) {

    $firstname = $row["F_Name"];
    $lastname = $row["L_Name"];
    $email = $row["Email"];
    $address = $row["Address"];
    $phone = $row["Phone"];

} 

if (isset($_POST['update'])) {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phoneno"];

    $sql = "UPDATE signup SET F_Name='$firstname', L_Name='$lastname', Email='$email' , Address='$address', Phone= '$phone'  WHERE User_ID='" .$_SESSION['User_ID'] . "'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["email"] = $email;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["lastname"] = $lastname;
        header("Location:profile.php");
        exit();
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/update.css">

</head>

<body>

<div class="signupcontainer">
      <div class="signup-main-box">
        <h1>Update</h1>

<form method="POST">



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
            <input name="phoneno" id="phoneno" class="text-name" type="number" />
            <label>Mobile Number</label>
            <div class="error"></div>
          </div>

          <div class="login-register">

              <button type ="submit" name ="update" class = "bt"> -Update- </button>


          </div>

</div>


         
</form>
</div>
</div>

</body>

</html>
