<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
<body>
   <!--Navbar-->
   <div class="container-fluid p-0">

    <!--First Child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/logo.png" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                        <a href="" class="nav-link">Welcome Guest</a>
                        <a href="" class="nav-link">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

    <!--Second Child-->

    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!--Third Child-->

    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="px-2">
                <a href="#"><img src="../images/computer-1.jpg" 
                alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button class="my-3">
                    <a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                <button class="my-3">
                    <a href="index.php?insert_product" class="nav-link text-light bg-info my-1">
                        Insert Product</a></button>
                <button class="my-3">
                    <a href="index.php?insert_category" class="nav-link text-light bg-info my-1">
                        Insert Category</a></button>
                <button class="my-3">
                    <a href="" class="nav-link text-light bg-info my-1">Delete Product</a></button>
                <button class="my-3">
                    <a href="" class="nav-link text-light bg-info my-1">Edit Product</a></button>
                <button class="my-3">
                    <a href="" class="nav-link text-light bg-info my-1">Order List</a></button>
                <button class="my-3">
                    <a href="" class="nav-link text-light bg-info my-1">Payment List</a></button>
                <button class="my-3">
                    <a href="" class="nav-link text-light bg-info my-1">User List</a></button>

            </div>
        </div>
    </div>

    <!--Forth Child-->
<div class="container my-5">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_category.php');
    }
    if(isset($_GET['insert_product'])){
        include('insert_product.php');
    }
    ?>
</div>


    <!--Last Child-->
<div class="bg-info p-3 text-center">
  <p>All Rights Reserved © Purna-2023</p>
</div>
  </div>
<!--Bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
crossorigin="anonymous"></script>
</body>

</html>