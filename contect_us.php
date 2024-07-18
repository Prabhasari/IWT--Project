<?php
session_start();

include ("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST ['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        // save to database
        $query = "INSERT INTO contact_us (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

        mysqli_query($conn, $query);
        header ("location: index.php ");
        
    } else {
        echo "Please enter valid information!";
    }
}
?>

<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contect_us.css">
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
    <center>
    <div class="containerC">
        
        <div class="form">
           

            <!----Start first page-->
            <div class="contact-info">
                <h1 class="title"> Let's get in touch</h1>
                <p class="paragraph1">Want to get in touch? we'd love hear you.Here how you can reach us.
                </p>

                <div class="info">
                    <div class="information">
                        <img src ="1/location-dot-solid.svg" class="icon" alt="">
                        <p>Cherry Drive Unicode,NY 11553</p>
                    </div>

                    <div class="information">
                        <img src ="1/envelope-solid.svg" class="icon" alt="">
                        <p>Stoxieofficial@gmail.com</p>
                    </div>

                    <div class="information">
                        <img src ="1/phone-solid.svg" class="icon" alt="">
                        <p>011-2535896</p>
                    </div>
                </div>

                <div class="social-media">
                    <h3> Conect with Us :</h3>

                    <div class="Social-icons">
                    <img src = "1/facebook.svg" class="socialmedia" alt="">
                    <img src = "1/square-twitter.svg" class="socialmedia" alt="">
                    <img src="1/instagram.svg" class="socialmedia" alt="">
                    <img src="1/linkedin.svg" class="socialmedia" alt="">
                </div>
                </div>

            </div>


                <!--Start second page-->
                <div class="contact-form">
    <form action="contect_us.php" method="POST">
        <h1 class="title">Contact Us</h1>

        <div class="input-containerC">
            <input type="text" name="name" placeholder="Enter your name" class="input">
        </div>

        <div class="input-containerC">
            <input type="email" name="email" placeholder="Enter your email" class="input">
        </div>

        <div class="input-containerC">
            <input type="tel" name="phone" placeholder="Enter your Tel number" class="input">
        </div>

        <div class="input-containerC">
            <textarea name="message" placeholder="Text something..." class="input"></textarea>
        </div>
 
        <button name = "submit" type="submit" value="submit" class="cardsubmit"> submit</button>
    </form>
</div>
   
</center>

<footer>
            <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col">
                                <h4>Customer Care</h4>
                                <ul>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">How to</a></li>
                                    <li><a href="#">Return & Refunds</a></li>
                                    <li><a href="contect_us.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>STOXIE</h4>
                                <ul>
                                    <li><a href="contect_us.php">Contect Us</a></li>
                                    <li><a href="html/faq1.html">FAQ</a></li>                           
                                    <li><a href="html/priv.html">Privacy Policy</a></li>
                                    <li><a href="html/term.html">Trems & Condition</a></li>
                                </ul>
                            </div> 
                             
                            <div class="footer-col">
                                <h4>Follow Us</h4>
                                <div class="social-link">
                                    <a href="https://www.facebook.com/profile.php?id=100093329599412&mibextid=LQQJ4d"><i id="pics" class='bx bxl-facebook-circle'></i></a>
                                    <a href="https://instagram.com/stoxie.official?igshid=OGQ5ZDc2ODk2ZA=="><i id="pics" class='bx bxl-instagram-alt'></i></a>
                                    <a href="#"><i id="pics" class='bx bxl-twitter' ></i></a>
                                    <a href="#"><i id="pics" class='bx bxl-youtube' ></i></a>
                                </div>
                            </div>  
                            <div class="footer-col">
                                <h4>Payement Method</h4>
                                <div class="payment-link">
                                    <a href="card.php"><i id="pics" class='bx bxl-visa'></i></a>
                                    <a href="card.php"><i id="pics" class='bx bxl-mastercard' ></i></a>
                                    <a href="card.php"><i id="pics" class='bx bxs-wallet'></i></a>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
        
            </footer>

</body>
</html>