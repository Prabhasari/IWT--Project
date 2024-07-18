<?php 
include ("connection.php");

session_start();

    $query = "DELETE FROM signup WHERE User_ID='" .$_SESSION['User_ID'] . "'";
    $result = mysqli_query($conn, $query);

    header("Location: login.php");


?>
