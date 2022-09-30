
<?php
    $id=$_GET['ID'];


    include 'config.php';
    $record=mysqli_query($myconn,"DELETE FROM ecommerce.tbl1product WHERE id = $id ");

    header("location:index.php");

?>