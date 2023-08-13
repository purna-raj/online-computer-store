<?php
include('../include/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['description'];
    $product_keywords=$_POST['keywords'];
    $product_category=$_POST['category'];
    $product_price=$_POST['price'];
    $product_status='true';

    //Images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    //Image tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //empty condition
    if ($product_title=='' or $product_description== '' or $product_keywords=='' or $product_category==''
    or $product_image1=='' or $product_image2=='' or $product_image3=='' or $product_price==''){
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");

    //insert query
        $insert_product="insert into `product` (product_title, description, keywords, 
        category_id, product_image1, product_image2, product_image3, price, date, status) 
        values('$product_title','$product_description','$product_keywords','$product_category','$temp_image1',
        '$temp_image2','$temp_image3','$product_price', NOW(),'$product_status')";
        $result_query=mysqli_query($con,$insert_product);
        if($result_query){
            echo "<script>alert('Product is successfully inserted')</script>"; 
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <!--Bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- CSS Files-->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-1">
        <h1 class="text-center mt-3">Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_title" class="form-label">Product title</lable>
                <input type="text" name="product_title" id="product_title" class="form-control"
                Placeholder="Enter product title" autocomplete="off" required="required">
            </div>
        
            <!--description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="description" class="form-label">Product description</lable>
                <input type="text" name="description" id="description" class="form-control"
                Placeholder="Enter product description" autocomplete="off" required="required">
            </div>

            <!--keywords-->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="keywords" class="form-label">Product keywords</lable>
                <input type="text" name="keywords" id="keywords" class="form-control"
                Placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>

            <!--category-->
            <div class="form-outline mb-4 w-50 m-auto">
            <select name="category" id="" class="form-select">
            <option value="">Select category</option>
            <?php
            $select_query="Select * from `category`";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
            $category_title=$row['category_title'];
            $category_id=$row['category_id'];
            echo "<option value='$category_id'>$category_title</option>";
            }
            ?>
        </select>
    </div>

    <!--Image1-->
    <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_image1" class="form-label">Product image1</lable>
                <input type="file" name="product_image1" id="product_image1" class="form-control" 
                required="required">
            </div>

    <!--Image2-->
    <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_image2" class="form-label">Product image2</lable>
                <input type="file" name="product_image2" id="product_image2" class="form-control" 
                required="required">
            </div>

    <!--Image3-->
    <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_image3" class="form-label">Product image3</lable>
                <input type="file" name="product_image3" id="product_image3" class="form-control" 
                required="required">
            </div>

    <!--Price-->
    <div class="form-outline mb-4 w-50 m-auto">
                <lable for="price" class="form-label">Product price</lable>
                <input type="text" name="price" id="price" class="form-control"
                Placeholder="Enter product price" autocomplete="off" required="required">
            </div>
    <!--Submit-->
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
            </div>
        </form>
    </div>

</body>
</html>