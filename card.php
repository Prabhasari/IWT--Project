<?php
session_start();

include ("connection.php");
include("functions.php");

$user_data = check_login($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nameoncard = $_POST['nameoncard'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    if (!empty($nameoncard) && !empty($cardnumber) && !empty($expmonth) && !empty($expyear) && !empty($cvv)) {
        // save to database
        $query = "INSERT INTO payment (Name, CardNumber, Expmonth, Expyear, CVV) VALUES ('$nameoncard', '$cardnumber', '$expmonth', '$expyear', '$cvv')";
        mysqli_query($conn, $query);

        header ("location: track.php");
    } else {
        echo "Please enter valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>STOXIE</title>
    <link rel="stylesheet" href="css/cardcss.css">
    <link rel="stylesheet" href="css/header.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>



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



<body>
<div class="cardcontainer">
    <form action="" method="POST">
        <div class="cardrow">
            <div class="cardcol">
                <h3 class="cardtitle">Billing Address</h3>
                <div class="cardinputbox">
                    <span>Full Name</span>
                    <h3><?php echo $user_data['F_Name'] . ' ' . $user_data['L_Name'] ?></h3>
                </div>
                <div class="cardinputbox">
                    <span>Email</span>
                    <h3><?php echo $user_data['Email']; ?></h3>
                </div>
                <div class="cardinputbox">
                    <span>Address</span>
                    <h3><?php echo $user_data['Address']; ?></h3>
                </div>
            </div>
            <div class="cardcol">
                <h3 class="cardtitle">Payment</h3>
                <div class="cardinputbox">
                    <span>Cards Accepted</span>
                </div>
                <div class="cardinputbox">
                    <span>Name on Card</span>
                    <input name="nameoncard" type="text" placeholder="Abishaan Thiyagalingam">
                </div>
                <div class="cardinputbox">
                    <span>Card Number</span>
                    <input name="cardnumber" type="number" placeholder="123456789">
                </div>
                <div class="cardinputbox">
                    <span>Exp Month</span>
                    <input name="expmonth" type="number" placeholder="12">
                </div>
                <div class="cardflex">
                    <div class="cardinputbox">
                        <span>Exp Year</span>
                        <input name="expyear" type="number" placeholder="2022">
                    </div>
                    <div class="cardinputbox">
                        <span>CVV</span>
                        <input name="cvv" type="number" placeholder="123">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" onclick="openpopup()" value="Check Out" class="cardsubmit"> sumbit  </button>
    </form>
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
<script>


    function openpopup() {
        alert ("your payment made successfully \n YOUR DELIVERY ID IS <?php echo $user_data['ID']?>");
    }


</script>
</body>
</html>
