<?php

$mysqli = mysqli_connect('localhost', 'root' , 'Rob.1323' , 'xpod') ;
if(!$mysqli){
    die('Connect error'.mysqli_connect_error()) ;  
} 


if (isset($_GET["id"])) {



    $query = 'DELETE FROM cart WHERE product_id ="'.$_GET['id'].'" ';
    mysqli_query($mysqli,$query) ; 
    header('Location:../cart.php');
} 


?>
