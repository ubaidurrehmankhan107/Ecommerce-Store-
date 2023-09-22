<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce website in PHP and MYSQL</title>
<!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- css file -->
<link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
   <img src="./images/logo.png"  alt="logo" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: 100/-</a>
        </li>
        
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="search" class="btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>


<!-- calling cart function -->
<?php
cart();

?>
<!-- Second Child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
  </li>
  <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
  </li>
  </ul>
</nav>



<!-- Third child -->

<div class="bg-light">
  <h2 class="text-center mb-10 mp-10">Hidden Store</h2>
  <p class="text-center mb-10 mp-10">Communication is the at the heart of E-commerce store and community</p>
</div>


<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- Products -->
    <div class="row">

    <!-- fetching products -->
    
      <?php


//calling function


getproducts();
get_unique_categories();
get_unique_brands();
    ?> 

  <!-- row ends -->
 </div>   
 <!-- column ends -->
</div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- Brands to be displayed -->

    <ul class="navbar-nav me-auto text-center">
      <li class="navbar-item bg-info">
        <a href="#" class="nav-link text-light"><h3>Delivery Brand</a>
      </li>
      <?php 
   // calling brands
      getbrands();

      ?>
    
    </ul>

    <!-- Catagories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="navbar-item bg-info">
        <a href="#" class="nav-link text-light"><h3>Categories</a>
      </li>
      <?php 
// calling categories
      getcategories();

      ?>
    </ul>

    <!-- sidenav -->
  </div>
</div>

 <!-- last child -->

<!-- include footer -->

<?php include("./includes/footer.php") ?>

</div>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
