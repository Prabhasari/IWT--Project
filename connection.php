<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "online_shopping_mall";


if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Faild to connect!");
}