<?php

 $Id = $_GET['ID'];

 include 'Config.php';
 
    mysqli_query($con,"DELETE FROM `products` WHERE id=$Id");
 
 

 
 header("location: show_products.php");
?>