<?php
include('../includes/connect.php');

if(isset($_POST['insert_brand'])){
  $brand_title = $_POST['brand_title'];

  $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";
  $result_select = mysqli_query($con, $select_query);

  if (!$result_select) {
      echo "Query error: " . mysqli_error($con);
  } else {
      $number = mysqli_num_rows($result_select);
      
      if ($number > 0) {
          echo "<script>alert('This brand is present inside the database')</script>";
      } else {
          $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
          $result_insert = mysqli_query($con, $insert_query);
          
          if ($result_insert) {
              echo "<script>alert('Brand has been added')</script>";
          } else {
              echo "Insert error: " . mysqli_error($con);
          }
      }
  }
  header("Location: index.php?insert_brand");
  exit();
}
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
<input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand"  value ="insert Brands"  >
  
</div>
</form>