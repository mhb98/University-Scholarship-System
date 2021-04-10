<?php
require_once("connect.php");
    
    $idd = $_REQUEST["id"];
    //$from = $_REQUEST["from"];
    //echo $idd;
    /*$query = "SELECT status FROM `scholarshiplist` WHERE id= $idd";
    $run = mysqli_query($conn, $query);
    $fetchQ = mysqli_fetch_array($run);*/
    //$fetchQ['status'];
    $q = "UPDATE `scholarshiplist` SET status = 'APPROVED' where id = $idd";
    $run = mysqli_query($conn, $q);
    if(!$run){
        echo "Not Updated";
    }
    else{
        header("Location: index.php");
       // echo "Hello world";
    }
    //echo "Hello world";


?>