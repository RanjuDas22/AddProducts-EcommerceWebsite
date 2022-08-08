<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Show Products-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-4">
        <a href="show_products.php"><button type="button" id = "btn" class="btn btn-primary mt-3"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
      Show Products 
      </button></a>
      </div>
      <div class="col-4 mt-3">
      <form  action ="search_result.php" method ="POST" class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="Pname" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success" name="p_search" type="submit">Search</button>
      </form>
      </div>
      </div>
    
    <div class="row">
        <div class="col-md-8 col-lg-12 m-auto">
        
        <div class="bg-danger rounded-pill fs-4 fw-bold my-3  d-grid col-9 mx-auto text-center">Show Search Product</div>

</div>
    </div>
</div>
    
  <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-12 m-auto">
       <table class="table table-hover border my-4">
        <thead>
               
        
         <th>Image</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Selling Quantity</th>
       <th>Date</th>
       <th>Update</th>
       <th>Delete</th>
        </thead>
    
      <tbody>

      <?php
       
       
    if(isset($_POST['p_search'])){
   
    include 'Config.php';

    $product_name = $_POST['Pname'];

    $Record = mysqli_query($con,"SELECT * FROM `products` WHERE  name like '%$product_name%' or name like '$product_name' ");
    while($row = mysqli_fetch_array($Record))
    //  $total = $row['quantity'] - $row['sellquantitty'];

     echo"
        <tr>
   
     
    <td><img src='$row[image]' height='250px' width='250px'> </td>
     <td> $row[name]</td>
     <td> <a href='update_quantity.php?ID=$row[id]'  class='btn btn-info'> $row[quantity]</a></td>
     <td > <a href='update_selling_quantity.php?ID=$row[id]'  class='btn btn-info'> $row[sellquantity]</a></td>
     <td> $row[date]</td>
     
     <td> <a href='update.php? ID=$row[id]'  class='btn btn-warning'> Update</a></td>
     <td> <a href='delete.php?ID=$row[id]'  class='btn btn-danger'> Delete</a></td>
     
     </tr>

    

     ";

   
    }
      
    
      ?>

      </tbody>
       </table>

      </div>
      </div>
     </div>
     <!-- --------------------search productshow------------ -->





    <script>
    
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>