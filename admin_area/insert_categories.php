<?php
include('../includes/connect.php');

if(isset($_POST['insert_cat'])){
  $category_title = $_POST['cat_title'];

  $select_query = "SELECT * FROM `categories` WHERE category_title='$category_title'";
  $result_select = mysqli_query($con, $select_query);

  if (!$result_select) {
      echo "Query error: " . mysqli_error($con);
  } else {
      $number = mysqli_num_rows($result_select);
      
      if ($number > 0) {
          echo "<script>alert('This category is present inside the database')</script>";
      } else {
          $insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
          $result_insert = mysqli_query($con, $insert_query);
          
          if ($result_insert) {
              echo "<script>alert('Category has been added')</script>";
          } else {
              echo "Insert error: " . mysqli_error($con);
          }
      }
  }
  header("Location: index.php?insert_category");
  exit();
}
?>
<h2 class="text-center">Insert Categories</h2>
<form action="insert_categories.php" method="post" class="mb-2">
  <div class="input-group w-90 mb-3">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="categories" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories">
  </div>
</form>
