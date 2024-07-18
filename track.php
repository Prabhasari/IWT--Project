<!DOCTYPE html>
<html>
<head>
   <title>Delivery Tracking</title>
   <link rel = "stylesheet" href="css/track.css">
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
                        <a href="index.php" >Home</a>
                    </li>
                    <li>
                        <a href="html/about.html">About_Us</a>
                    </li>
                    <li>
                        <a href="track.php" class="active">Track My Order</a>
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

<h1>Delivery Tracking</h1>

<section id="tracking-info">
<h1>Track Your Delivery</h1>
<form id="tracking-form" method="POST" action="track.php" >
     <label for="Delivery_ID">Delivery ID:</label>
     <input type="text" name="Delivery_ID" id="Delivery_ID" required>
     <button name="submit" type="submit" onclick="popUp()" id="pop">Track</button>
     
     <script>
        function popUp(){
            alert("Are you sure , Is this valid Deliver ID?");
        }
     </script>

     
</form> 

<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "online_shopping_mall";


if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Faild to connect!");
}

if(isset($_POST['submit']))
{
    // Retrieve tracking number from the form
    $deliveryId = $_POST['Delivery_ID'];

    
    
// Fetch delivery information from the database
$sql = "SELECT * FROM delivary WHERE Delivery_ID = '$deliveryId'";
$result = $conn->query($sql);





    

if ($result->num_rows > 0) {
    // Display delivery details
    $row = $result->fetch_assoc();


        echo "<br> Delivery ID: " . $row['Delivery_ID'] . "<br>";
        echo "Delivery Date: " . $row['Delivery_Date'] . "<br>";
        echo "Delivery Address: " . $row['Delivery_Address'] . "<br>";
        echo "<br> Product: " . $row['Product'] . "<br>";
        echo "<br> Delivery Status: " . $row['Delivery_Status'] . "<br>";
    
    }

 else {
    echo "No results found for the tracking number.";
    
}
}








?>



</body>

</html>