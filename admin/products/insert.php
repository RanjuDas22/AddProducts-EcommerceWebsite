<?php
if(isset($_POST['submit'])){
    
    include 'Config.php';
    $product_name = $_POST['Pname'];
    $product_quantity = $_POST['Pquantity'];
    $product_sellquantity = $_POST['Psellquantity'];
    $product_date = $_POST['Pdate'];
    
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];

          $img_des = "Uploadimage/".$image_name;

    move_uploaded_file($image_loc, "Uploadimage/".$image_name);
    


     mysqli_query($con,"INSERT INTO `products`(`name`,`quantity`,`sellquantity`,`date`,`image`) VALUES ('$product_name', '$product_quantity','$product_sellquantity','$product_date', '$img_des')");
     header("location: index.php");

}

?>

<!-- update code -->

 <!-- PHP UPDATE CODE -->

 <?php
     if(isset($_POST['update'])){
      include 'Config.php';

        $product_id = $_POST['Pid'];
        $product_name = $_POST['Pname'];
        $product_quantity = $_POST['Pquantity'];
        $product_sellquantity = $_POST['Psellquantity'];
        $product_date = $_POST['Pdate'];
        
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
    
              $img_des = "Uploadimage/".$image_name;
    
        move_uploaded_file($image_loc, "Uploadimage/".$image_name);

        

        mysqli_query($con,"UPDATE `products` SET `name`='$product_name',`quantity`='$product_quantity',`sellquantity`='$product_sellquantity',`date`='$product_date',`image`='$img_des' WHERE id = $product_id");

        header("location: index.php");
        
    
     }
     ?>

