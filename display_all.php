<!--connection file-->

<?php
include('include/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Computer Store</title>
    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous">

    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!--CSS Files-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Navbar-->
    <div class = "container-fluid p=0"></div>
    <!--First Child-->
    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
   <img src="./Images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="#">Cart<sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Amount</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child-->
<nav class = "navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class=navbar-nav me-auto>
    <li class="nav-item">
    <a class="nav-link" href="#">Welcome Guest</a>

  </li>
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>

<!--Third Child-->
<div class="bg-info">
  <h3 class="text-center">Online Computer Store</h3>
  <p class="text-center">Welcome you to our online store</p>
</div>

<!--Forth Child-->
<div class="row px-1">
  <div class="col-md-12">
  <!--Products-->
    <div class="row">
      <!--Displaying Products-->

    <?php
    //calling functions
    getproducts();
    ?>
      
<!--Row end-->

</div>
<!--Column end-->

</div>

   
<!--Last Child-->
<!--including footer-->
<?php
include("./include/footer.php")
?>
  </div>

<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
crossorigin="anonymous"></script>
</body>
</html>