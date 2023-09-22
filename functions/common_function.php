<?php
// including connect file

include('./includes/connect.php');

//getting products 
function getproducts(){
    global $con;

    // Check if the 'category' parameter is set in the URL
    if(isset($_GET['category'])){
        $category_id = $_GET['category'];
        $select_query = "SELECT * FROM `products` WHERE category_id = $category_id ORDER BY rand() LIMIT 0,9";
    } else if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];
        $select_query = "SELECT * FROM `products` WHERE brand_id = $brand_id ORDER BY rand() LIMIT 0,9";
    } else {
        // Default query when no category or brand is selected
        $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";
    }

    $result_query = mysqli_query($con, $select_query);

    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "<div class='col-md-4 mb-2'>
            <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description.</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                </div>
            </div>
        </div>";
    }
}


// getting all products 

function get_all_products(){
  global $con;

    // Check if the 'category' parameter is set in the URL
    if(isset($_GET['category'])){
        $category_id = $_GET['category'];
        $select_query = "SELECT * FROM `products` WHERE category_id = $category_id ORDER BY rand() LIMIT 0,9";
    } else if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];
        $select_query = "SELECT * FROM `products` WHERE brand_id = $brand_id ORDER BY rand() LIMIT 0,9";
    } else {
        // Default query when no category or brand is selected
        $select_query = "SELECT * FROM `products` ORDER BY rand()";
    }

    $result_query = mysqli_query($con, $select_query);

    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "<div class='col-md-4 mb-2'>
            <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description.</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                </div>
            </div>
        </div>";
    }
}


//getting unique cattegories


function get_unique_categories(){
  global $con;
  // Condition to check isset or not 
  if(isset($_GET['category'])){
    $category_id = $_GET['category'];
    $select_query = "SELECT * FROM `products` WHERE category_id = $category_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows-mysqli_num_rows($result_query);
   if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No stock for this category </h2>";
   }

    while($row = mysqli_fetch_assoc($result_query)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];

      echo "<div class='col-md-4 mb-2'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                  <h5 class='card-title'>$product_title</h5>
                  <p class='card-text'>$product_description</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                </div>
              </div>
            </div>";
    }
  }
}


//getting unique brands


function get_unique_brands(){
  global $con;
  // Condition to check isset or not 
  if(isset($_GET['brand'])){
    $brand_id = $_GET['brand'];
    $select_query = "SELECT * FROM `products` WHERE brand_id = $brand_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query); // Fix the typo here

    if($num_of_rows == 0){
      echo "<h2 class='text-center text-danger'>This brand is not available right now</h2>";
    }

    while($row = mysqli_fetch_assoc($result_query)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];

      echo "<div class='col-md-4 mb-2'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                  <h5 class='card-title'>$product_title</h5>
                  <p class='card-text'>$product_description</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

                </div>
              </div>
            </div>";
    }
  }
}



//displaying brand in side nave

function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
      $result_brands=mysqli_query($con,$select_brands);
      $row_data=mysqli_fetch_assoc($result_brands);
      while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$row_data['brand_title'];
        $brands_id=$row_data['brands_id'];
       echo "<li class='navbar-item'>
       <a href='index.php?brand=$brands_id' class='nav-link text-light'>$brand_title</a>
     </li>";
      }
}

// di)splaying categories in sidenav

function getcategories(){
    global $con;
    $select_categories="Select * from `categories`";
      $result_categories=mysqli_query($con,$select_categories);
      $row_data=mysqli_fetch_assoc($result_categories);
      while($row_data=mysqli_fetch_assoc($result_categories)){
        $category_title=$row_data['category_title'];
        $Category_id=$row_data['Category_id'];
       echo "<li class='navbar-item'>
       <a href='index.php?brand=$Category_id' class='nav-link text-light'>$category_title</a>
     </li>";
      }
}


// searching products function

function search_product(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
   $search_query = "SELECT * FROM `products` WHERE product_keywords like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    $num_of_rows = mysqli_num_rows($result_query); // Fix the typo here

    if($num_of_rows == 0){
      echo "<h2 class='text-center text-danger'>No results match No results found in this category</h2>";
    }
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "<div class='col-md-4 mb-2'>
            <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description.</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                </div>
            </div>
        </div>";
    }
  }
}


//view details function
function view_details() {
  global $con;

  // Check conditions
  if (isset($_GET['product_id'])) {
    if (!isset($_GET['category'])) {
      if (!isset($_GET['brand'])) {
        $product_id = $_GET['product_id'];

        $select_query = "SELECT * FROM `products` WHERE product_id=$product_id";
        $result_query = mysqli_query($con, $select_query);

        if ($row = mysqli_fetch_assoc($result_query)) {
          $product_title = $row['product_title'];
          $product_description = $row['product_description'];
          $product_image1 = $row['product_image1'];
          $product_image2 = $row['product_image2'];
          $product_image3 = $row['product_image3'];
          $product_price = $row['product_price'];
          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];

          echo "<div class='col-md-4 mb-2'>
                  <div class='card'>
                      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                      <div class='card-body'>
                          <h5 class='card-title'>$product_title</h5>
                          <p class='card-text'>$product_description</p>
                          <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                          <a href='index.php' class='btn btn-secondary'>Go Home</a>
                      </div>
                  </div>
              </div>

              <div class='col-md-8'>
                  <!-- related images -->
                  <div class='row'>
                      <div class='col-md-12'>
                          <h4 class='text-center text-info mb-5'>Related Products</h4>
                      </div>
                      <div class='col-md-6'>
    <img src='./admin_area/product_images/$product_image2' alt='$product_title' class='img-thumbnail' style='width: 150px; height: 150px;'>
</div>

<div class='col-md-6'>
    <img src='./admin_area/product_images/$product_image3' alt='$product_title' class='img-thumbnail' style='width: 150px; height: 150px;'>
</div>


                  </div>
              </div>";
        }
      }
    }
  }
}



// get ip address function

function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;



// cart function 
function cart() {
  global $con;

  if (isset($_GET['add_to_cart'])) {
      $get_ip_add = getIPAddress();
      $get_product_id = $_GET['add_to_cart'];

      $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add' AND product_id=$get_product_id";
      $result_query = mysqli_query($con, $select_query);

      if ($result_query) {
          $num_of_rows = mysqli_num_rows($result_query);

          if ($num_of_rows > 0) {
              echo "<script>alert('This item is already in the cart');</script>";
              echo "<script>window.open('index.php','_self');</script>";
          } else {
              $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id,'$get_ip_add',0)";
              $result_insert = mysqli_query($con, $insert_query);

              if ($result_insert) {
                  echo "<script>alert('Item added to cart successfully');</script>";
                  echo "<script>window.open('index.php','_self');</script>";
              } else {
                  die("Error with insert query: " . mysqli_error($con));
              }
          }
      } else {
          die("Error with select query: " . mysqli_error($con));
      }
  }
}


// cart function to get number of items added into the cart

function cart_item(){
  if (isset($_GET['add_to_cart'])) {
      global $con;
      $get_ip_add = getIPAddress();
      $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
      $result_query = mysqli_query($con, $select_query);
      $count_cart_items = mysqli_num_rows($result_query);
          } else {
            global $con;
            $get_ip_add = getIPAddress();
            $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
            $result_query = mysqli_query($con, $select_query);
            $count_cart_items = mysqli_num_rows($result_query);    
      }
      echo $count_cart_items;
  }



?>