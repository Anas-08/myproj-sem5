

<?php

    $Name=$_POST['name'];
    $Password=$_POST['password'];


    $conn=mysqli_connect('localhost','root','Thispc@123','ecommerce');
    
    $result=mysqli_query($conn,"SELECT * FROM ecommerce.tbluser WHERE (username = '$Name' OR Email = '$Name') AND  Password =  '$Password' ");

    session_start();

    if (mysqli_num_rows($result)) {

        $_SESSION['user']=$Name;
        echo "
        <script>
            alert('Successfully Login');
            window.location.href='../home.php';
        </script>
    ";
    }
    else{
        echo "
        <script>
            alert('Incorrect Password');
            window.location.href='login.php';
        </script>
    ";
    }
?>