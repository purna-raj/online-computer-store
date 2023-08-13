<?php
include('../include/connect.php');
if(isset($_POST['insert_cat'])){
  $category_title=$_POST['cat_title'];

  //Select data from database
  $select_query="select * from `category` where category_title = '$category_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
   echo "<script>alert('Category is already exist')</script>";
  }else{

  $insert_query="insert into `category` (category_title) values ('$category_title')";
  $result=mysqli_query($con, $insert_query);
  if($result){
   echo "<script>alert('Category has been inserted successfully')</script>";
  }

  }
}

?>



<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="insert category" 
  aria-label="Category" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 mb-auto">
  
  <input type="submit" class="bg-info border-0 p-2" name="insert_cat" value="insert category">
  
</div>
</form>