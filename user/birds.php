<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds-page</title>

     <!-- Bootstrap 5 cdn flie -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- bootstrap icon cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


<?php
    include 'header.php';
?>
</head>
<body>
    
<!--card start  -->
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">



<h1 class="text-primary my-3 text-center">Birds</h1>
<?php
    include 'config.php';

    $Record= mysqli_query($myconn,"SELECT * FROM ecommerce.tbl1product");

            while ($row=mysqli_fetch_array($Record)) {
                    $check_page=$row['pcategory'];
                    if($check_page==='birds'){
echo "
<div class='col-md-6 col-lg-4 '>
<form action='insertcart.php' method='POST'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[pimage]' class='card-img-top m-auto' style='width:286px; height:215px;'>
  <div class='card-body text-center'>
    <h5 class='card-title'>$row[pname]</h5>
    <p class='card-text'> RS: ";?> <?php echo number_format($row['pprice'],2)?> <?php echo " </p>
   
    <input type='hidden' value='$row[pname]' name='pname'>
    <input type='hidden' value='$row[pprice]' name='pprice'>
 
    <input type='number' value=' min = '1' max = '20'' placeholder = 'Quantity' name='pquantity'><br><br>
    <input type='submit' class='btn btn-success w-100 ' value ='Add To Cart ' name='addcart' >

  </div>
</div>
</form>
</div>

";  
} 
}
?>

        </div>    
    </div>
</div>

<!--card end  -->
<?php 

  include 'footer.php';
  
?>
</body>
</html>