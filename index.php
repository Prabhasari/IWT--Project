<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data=check_login($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <title>STOXIE</title>
    <link rel="stylesheet" href="css/index.css">
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

    <div class="welcome">
        <br>
        <br>
    <center>   <h1> Hi!  <?php echo $user_data['F_Name'];?></h1>
    <br>
      <h2> Competitive Prices of all Variety of Products.  </h2> 
         <h2> Discover Products Online Now! </h2>
         <h2 id = "c"> Shop with Confidence. Free Shipping!! </h2></center>

    </div>

    <div class="wrapper">
        <div class="card">
            <img src = "photos/index/d.png">
            <div class="info">
                <h1>CLOTHING</h1>

                <a href = "product.php" class = "btn"> View More </a>
            </div>
        </div>

        <div class="card">
            <img src = "photos/index/s.png">
            <div class="info">
                <h1>FOOTWEARS</h1>
                
                <a href = "product.php" class = "btn"> View More </a>
            </div>
        </div>

        <div class="card">
            <img src = "photos/index/j.png">
            <div class="info">
                <h1>JEWELERY</h1>
               
                <a href = "product.php" class = "btn"> View More </a>
            </div>
        </div>

        <div class="card">
            <img src = "photos/index/w.png">
            <div class="info">
                <h1>WATCHES</h1>
        
                <a href = "product.php" class = "btn"> View More </a>
            </div>
        </div>
    </div>

    

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