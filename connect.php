<?php


// Create connection
$conn = new mysqli('localhost', 'mehedi', 'test1234','finalproject');

// Check connection
if (!$conn) {
    echo 'Connection failed:' . mysqli_connect_error();
  }
 // echo "Connected successfully";


//show data in html from database
$sql= 'SELECT * FROM scholarshiplist';
$result=mysqli_query($conn,$sql);
$scholarshiplist=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($scholarshiplist);


?>
