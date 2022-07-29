<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products Update-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
  </head>

  <body>
    <!-- <?php
 $Id = $_GET['ID'];
 include 'Config.php';
 $Record = mysqli_query($con, "SELECT * FROM `products` WHERE id=$Id");
 $data = mysqli_fetch_array($Record);

?> -->
     <div class="container ">
     <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-4 col-lg-4 m-auto border border-primary mt-4 d-md-flex justify-content-sm-center">
    <form action="insert.php" method="POST" enctype="multipart/form-data">
    <div class = "mb-3 ">
     <p class="text-center fw-bold fs-3 text-warning">Products Update</p>
    </div>
  <div class="mb-3 ">
  <label  class="form-label">Products Name</label>
  <input type="text" value ="<?php echo $data['name'] ?>" name ="Pname" class="form-control" placeholder="Enter Products Name">
</div>
  <div class="mb-3">
  <label  class="form-label">Products Quantity</label>
  <input type="number"value ="<?php echo $data['quantity'] ?>"  name = "Pquantity" class="form-control" placeholder="Enter Products Quantity">
</div>
  <div class="mb-3">
  <label  class="form-label">Products Selling Quantity</label>
  <input type="number"value ="<?php echo $data['sellquantity'] ?>"  name = "Psellquantity" class="form-control" placeholder="Enter Products price">
</div>
  <div class="mb-3">
  <label  class="form-label">Enter Date</label>
  <input type="date" value ="<?php echo $data['date'] ?>"  name = "Pdate" class="form-control" >
</div>
  <div class="mb-3 ">
  <label  class="form-label">Uplod Photo</label>
  <input type="file"  value ="<?php echo $data['image'] ?>"  name = "Pimage" accept=".jpg, .jpeg, .png" class="form-control" ><br>
  <img src="<?php echo $data['image'] ?>" style ="height:100px" alt="">
</div>
<input type="hidden" name="Pid" value="<?php echo $data['id'] ?>">
<button name="update" class="bg-danger fs-4 fw-bold my-3  d-grid col-9 mx-auto">Update Product</button>
</form>
    
 

  </div>
     </div>

     </div>
     <script>

     </script>
</body>
</html>


    