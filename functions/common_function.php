<?php
//including connection file
include('./include/connect.php');

//getting products
function getproducts(){
    global $con;
    $select_query="select * from `product` order by rand()";
    $result_query=mysqli_query($con,$select_query);
    
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['price'];
  $category_id=$row['category_id'];
  echo "<div class='col-md-3 mb-2'>
  <div class='card'>
    <img src='../Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href='#' class='btn btn-primary'>Add to Cart</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
    </div>
  </div>
  </div>";
  }
}

//searching product
function search_product(){
    global $con;
    if (isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
    $search_query="select * from `product` where keywords like'%$search_data_value%'";
    $result_query=mysqli_query($con,$search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>Product is not available at this moment</h2>";
    }
  while($row=mysqli_fetch_assoc($result_query)){
    
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['price'];
  $category_id=$row['category_id'];
  echo "<div class='col-md-3 mb-2'>
  <div class='card'>
    <img src='../Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href='#' class='btn btn-primary'>Add to Cart</a>
      <a href='#' class='btn btn-secondary'>View more</a>
    </div>
  </div>
  </div>";
  }
}
}

//view details function
function view_details(){
  if(isset($_GET['product_id'])){
  global $con;
    $product_id=$_GET['product_id'];
    $select_query="select * from `product` where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);
    
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['description'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['product_image2'];
  $product_image3=$row['product_image3'];
  $product_price=$row['price'];
  $category_id=$row['category_id'];
  echo "<div class='col-md-3 mb-2'>
  <div class='card'>
    <img src='../Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <a href='#' class='btn btn-primary'>Add to Cart</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
    </div>
  </div>
  </div>
  <div class='col-md-8'>
                <div class='row'>
                    <div class='col-md-12'>
                    <h3 class='text-center text-info mb-5'>Related products</h3>
                    </div>
                    <div class='col-md-6'>
                    <img src='../Admin/product_images/$product_image1' class='cart-img-top' alt='$product_title'>
                    </div>
                    <div class='col-md-6'>
                    <img src='../Admin/product_images/$product_image2' class='cart-img-top' alt='$product_title'>
                    </div>
                    <div class='col-md-6'>
                    <img src='../Admin/product_images/$product_image3' class='cart-img-top' alt='$product_title'>
                    </div>
                </div>
            </div>";
  }
}
}
?>