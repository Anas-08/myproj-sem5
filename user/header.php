<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap 5 cdn flie -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- bootstrap icon cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- font awesome downloaded file -->
  <link rel="stylesheet" href="./fontawesome/css/all.css">

</head>

<body>

  <?php
  session_start();
  $count = 0;
  if (isset($_SESSION['cart'])) {

    $count = count($_SESSION['cart']);
  }
  ?>
  <!-- nav start -->

  <nav class="navbar navbar-light bg-light col-md-12">
    <div class="container-fluid">
      <a class="navbar-brand pb-2"><img src="logo.png" alt="" height="40"> Royal Aquarium</a>


      <div class="d-flex">
        <a href="home.php" class="text-decoration-none text-dark pe-2"><i class="bi bi-house"></i> Home</a>
        <a href="viewcart.php" class="text-decoration-none text-dark pe-2"><i class="bi bi-cart"></i> cart(<?php echo $count ?>) | </a>

        <span>
          <i class="bi bi-person"></i> Hello,
          <?php

          if (isset($_SESSION['user'])) {
            echo $_SESSION['user'];

            echo "
    | <a href='form/logout.php' class='text-decoration-none text-dark pe-2'><i class='bi bi-box-arrow-in-right'></i> Logout</a>|
    ";
          } else {
            echo "
    | <a href='form/login.php' class='text-decoration-none text-dark pe-2'><i class='bi bi-box-arrow-in-right'></i> Logout</a>
    ";
          }
          ?>


          <!-- <a href="" class="text-decoration-none text-dark pe-2"><i class="bi bi-box-arrow-in-right"></i> Login</a>| -->
          <!-- <a href="../admin/mystore.php" class="text-decoration-none text-dark pe-2"> Admin</a> -->
        </span>
  </nav>
  </div>
  <!-- nav end -->

  <!-- second nav for products start -->
  <!-- 
<option value="fishtank">Fish Tank</option>
  <option value="fishes">Fishes</option>
  <option value="fishfood">Food&Accessories</option>
  <option value="birds">Birds</option>
  <option value="decoration">Decoration Item</option> -->
  <!-- <div class="container col-lg-10 col-md-10 col-sm-10"> -->

  <div class="bg-danger sticky-top">
    <ul class="list-unstyled d-flex justify-content-center">
      <li><a href="fishtank.php" class="text-decoration-none text-white fs-4 fw-bold px-5">FishTank</a></li>
      <li><a href="fishes.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Fishes</a></li>
      <li><a href="foodaccessories.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Food&Accessories</a></li>
      <li><a href="birds.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Birds</a></li>
      <li><a href="item.php" class="text-decoration-none text-white fs-4 fw-bold px-5">DecorationItems</a></li>
    </ul>
  </div>
  <!-- </div> -->


  <!-- second nav for products end -->



</body>

</html>