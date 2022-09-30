<?php
    echo $id = $_GET['id'];


    $myconn=mysqli_connect('localhost','root','Thispc@123','ecommerce');

    $record=mysqli_query($myconn,"DELETE FROM ecommerce.tbluser WHERE id = $id ");

    header("location:user.php");

   

?>