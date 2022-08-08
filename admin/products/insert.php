<?php
if(isset($_POST['psubmit'])){
   
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

  // if(empty( $product_name)|| empty( $product_quantity)||empty( $product_date)||empty( $product_image)){
  //   header("location: index.php");
    // else{}
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

          $Total_quantity =  $product_quantity -  $product_sellquantity;
          
          mysqli_query($con,"UPDATE `products` SET `name`='$product_name',`quantity`='$Total_quantity',`sellquantity`='$product_sellquantity',`date`='$product_date',`image`='$img_des' WHERE id = $product_id");
  
          header("location: show_products.php");
        
           
     }
     ?>
   
     <!-- Selling Quantity Update -->
     
 <?php
     if(isset($_POST['selling_quantity'])){
      include 'Config.php';
        
        $product_id = $_POST['Pid'];
        $product_name = $_POST['Pname'];
        $product_quantity = $_POST['Pquantity'];
        $product_sellquantity = $_POST['Psellquantity'];
        $product_date = $_POST['Pdate'];
        
        if(empty($product_quantity)||empty( $product_name)||empty( $product_sellquantity )){
          
          header("location: show_products.php");
        }
        else{
          $Total_quantity =  $product_quantity -  $product_sellquantity;

          mysqli_query($con,"UPDATE `products` SET `name`='$product_name', `quantity`='$Total_quantity',`sellquantity`='$product_sellquantity',`date`='$product_date' WHERE id = $product_id");
          header("location: show_products.php");
        }  

     }
     ?>
     
 <?php
     if(isset($_POST['update_quantity'])){
      include 'Config.php';

        $product_id = $_POST['Pid'];
        $product_name = $_POST['Pname'];
        $product_quantity = $_POST['Pquantity'];
      
        $product_date = $_POST['Pdate'];

        if(empty($product_quantity)||empty( $product_name)){
           
          header("location: show_products.php");
        }
        else{

          $Record = mysqli_query($con,"SELECT * FROM `products` WHERE id = $product_id");
          $data = mysqli_fetch_array($Record);
  
          $new_product_quantity =   $data['quantity'] + $product_quantity;
          
  
         mysqli_query($con,"UPDATE `products` SET `name`='$product_name', `quantity`='$new_product_quantity',`date`='$product_date' WHERE id = $product_id");
  
         
          header("location: show_products.php");
        }
     
         
    
     }
     ?>

<!-- ___________Products Search__________ -->

