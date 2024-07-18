<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data=check_login($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>



<header>
          <div class="logo"><img src="photos/LOGO SHOP.png" width="150px" height = "150px"></div> 
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li>
                        <a href="index.php" class="active">Home</a>
                    </li>
                    <li>
                        <a href="html/about.html">About_Us</a>
                    </li>
                    <li>
                        <a href="track.php">Track My Order</a>
                    </li>
                    <li>
                        <a href="html/faq1.html">FAQ</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>
                
                <li>
                    <a href="html/search.html"><i class='bx bx-search'></i></a>
            
                    </li>
            <li>
                <li><a href="profile.php"><i class='bx bx-user-circle' id = "pro"></i></a></li>
            </li>

            <li>
                <a href="logout.php">Logout</a>
                </li>

            </ul>
            </nav>

            </div>
        </header>



    <div class="containers">
        <div class="profile_box">
            <h1>User Profile</h1>
            
                    <img src = "photos/images.jpeg" class = "profile-pic">
                
            
            <h3><?php echo $user_data['F_Name'];?></h3>
            <h3><?php echo $user_data['L_Name'];?></h3>
            <h3><?php echo $user_data['Email'];?> </h3>
            <h3><?php echo $user_data['Address'];?></h3>
            <h3><?php echo $user_data['Phone'];?> </h3>



            <a href="update.php"><i class='bx bxs-message-square-edit' id = "edit"></i></a>
            <a href="delete.php"><i class='bx bxs-message-square-x' id = "delete"></i></a>

</div>
</div>





</body>
</html>