<?php

//get data passed from Voice Browser
$user = $_GET['user'];
$product = $_GET['product'];
$quantity = $_GET['quantity'];

$date = Date('Y-m-d'); //current date at server
$time = time(); //current time (in seconds format)
$id = $user . $time; //concatenation of contact ID (phone number) and time used as unique key

//connect to MYSQL database
$con = mysqli_connect("localhost","deb54061_admin","admin","deb54061_kiseed");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}

//insert data into the specific table
$sql = "INSERT INTO kiseed(id, user, product, quantity, date) VALUES ('$id','$user','$product', $quantity, NOW())";


//sanity check
if (!mysqli_query($con,$sql))
{
var_dump($sql);
}

//close database
mysqli_close($con);
?>
