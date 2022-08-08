<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
  </head>
  <body>
   
     <div class="container ">
      <a href="show_products.php"><button type="button" id = "btn" class="btn btn-primary mt-3"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  Show Products
</button></a>
     
     <div class="row">
    <div class="col-md-4 col-sm-5 m-auto border border-primary mt-2 d-md-flex justify-content-sm-center">
    <form action="insert.php" method="POST" enctype="multipart/form-data">
    <div class = "mb-3">
     <p class="text-center fw-bold fs-3 text-warning">Products Detail</p>
    </div>
  <div class="mb-3">
  <label  class="form-label">Products Name</label>
  <input type="text" name ="Pname" class="form-control" placeholder="Enter Products Name" autocomplete="off" required >
</div>
  <div class="mb-3">
  <label  class="form-label">Products Quantity</label>
  <input type="number" name = "Pquantity" class="form-control" placeholder="Enter Products Quantity" required>
</div>
  <div class="mb-3">
  <label  class="form-label">Products Selling Quantity</label>
  <input type="number" name = "Psellquantity" class="form-control" placeholder="Enter Products Selling Quantity" >
</div>
  <div class="mb-3">
  <label  class="form-label">Enter Date</label>
  <input type="date" name = "Pdate" class="form-control" required >
</div>
  <div class="mb-3">
  <label  class="form-label">Uplod Photo</label>
  <input type="file" name = "Pimage" accept=".jpg, .jpeg, .png" class="form-control" required >
</div>
  <!-- <div class="mb-3 " data-bs-spy="scroll">
  
  <input type="submit" name = "psubmit" value = "Add Product" class="form-control rounded-pill bg-danger fs-6 fw-bold d-grid" >
</div> -->
<button name="psubmit" class="bg-danger rounded-pill fs-4 fw-bold my-3  d-grid col-9 mx-auto">Add Product</button>
  </form>

  </div>
     </div>

     </div>

 
    <script>

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>