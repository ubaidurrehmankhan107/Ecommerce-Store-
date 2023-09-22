<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .admin_image{
 width: 100px;
 object-fit: contain;
}

.footer{
    position: absolute;
    bottom: 0px; 
}
    </style>
</head>
<body>
<!-- First Child -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid ">
            <img src="../images/logo.png" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- 2nd Child  -->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>

<!-- 3rd child -->
<div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-item">
        <div class="px-5">
            <a href="#"><img src="../images/peach.jpg" alt="" class="admin_image"></a>
            <p class="text-light text-center">Ubaid Ur Rehman</p>
        </div>

        <div class="button text-center">
    </button><button class="mt-4 p-1"><a href="insert_product.php" class="nav-link text-light bg-info mmb-3">Insert Products</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Products </a></button>

            <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1">View Catagories</a></button>

            <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1">Log Out</a></button>
        </div>
    </div>
</div>

<!-- fourth child -->
<div class="container my-3">
    <?php 
     if(isset($_GET['insert_category'])){
        include('insert_categories.php');
     }
     
     if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
     }
     
  ?>
</div>

<!-- last child -->


<div class="bg-info p-3 text-center footer">
<p>All rights reserved Designed by Ubaid </p>
</div>

<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>