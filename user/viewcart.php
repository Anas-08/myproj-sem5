<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewcart-page</title>

      <!-- Bootstrap 5 cdn flie -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- bootstrap icon cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>

<?php
include 'header.php';
?>
    
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center bg-dark mb-5 rounded">
            <h1 class="text-primary">My Cart</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table text-center table-bordered">
                <thead class="bg-warning fs-5 ">
                    <th>Serial No:</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>

                    <?php
                        // session_start();

                        $ptotal=0;
                        $total=0;
                        $i=0;

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {

                                $ptotal = $value['ProductPrice'] * $value['ProductQuantity'];
                                $total += $value['ProductPrice'] * $value['ProductQuantity'];
                                $i= $key +1;

                                echo "
                                    <form action='insertcart.php' method='POST'>
                                        <tr>
                                            <td>$i</td>
                                            <td><input type='hidden' name='pname' value='$value[ProductName]'>$value[ProductName]</td>
                                            <td><input type='hidden' name='pprice' value='$value[ProductPrice]'>$value[ProductPrice]</td>
                                            <td><input type='text' name='pquantity' value='$value[ProductQuantity]'></td>
                                            <td>$ptotal</td>
                                            <td><button class='btn btn-warning' name='updatecart'>Update</button></td>
                                            <td><button class='btn btn-danger' name='deletecart'>Delete</button></td>
                                            <td><input type='hidden' value='$value[ProductName]' name='item'></td>
                                        </tr>
                                
                                
                                
                                    </form>
                                ";
                                
                            }
                        }
                    ?>
                <tbody>
                    
                </tbody>
            </table>
        </div>

                        <div class="col-lg-3 text-center border-black">
                            <h3 class="">TOTAL</h3>
                            <h1 class="bg-danger text-white"><?php
                            echo number_format($total,2);
                            ?></h1>
                        </div>
    </div>
</div>


</body>
</html>