

<?php


session_start();
// session_destroy();

if(isset($_SESSION['user'])){


    $product_name=$_POST['pname'];
    $product_price=$_POST['pprice'];
    $product_quantity=$_POST['pquantity'];


//to avoid double entry of product    
if(isset($_POST['addcart']))
{

        $check_product=array_column($_SESSION['cart'],'ProductName');
    
        if (in_array($product_name,$check_product)) 
        {
            echo "
                <script>
                    alert('Product already added');
                    window.location.href='home.php';
                </script>
            ";
        }
        else {
    
    $_SESSION['cart'][]=array('ProductName'=>$product_name,
                            'ProductPrice'=>$product_price,
                            'ProductQuantity'=>$product_quantity);
                            
                            header("location:viewcart.php");
             }              
}


// delete from cart(deletecart)

if (isset($_POST['deletecart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['ProductName'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);

            $_SESSION['cart']= array_values($_SESSION['cart']);
            header("location:viewcart.php");
        }
    }
}


//update from cart(updatecart)
if (isset($_POST['updatecart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['ProductName'] === $_POST['item']) {
            $_SESSION['cart'][$key]=array('ProductName'=>$product_name,
                                          'ProductPrice'=>$product_price,
                                          'ProductQuantity'=>$product_quantity);
            
                          header("location:viewcart.php");
        }
    }
}
}
else{
    header("location:form/login.php");
}
?>