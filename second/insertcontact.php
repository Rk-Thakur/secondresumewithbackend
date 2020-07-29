<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $nam=$_POST['address'];
    $name=$_POST['phone'];
    $post=$_POST['email'];
    $pot=$_POST['website'];
    $sql="INSERT INTO contact(address,phone,email,website) values('$nam','$name','$post','$pot')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //echo("data inserted");
        header("Location: index.php");

    }else{
        echo("data not inserted").mysqli_error($conn);
    }
}

?>