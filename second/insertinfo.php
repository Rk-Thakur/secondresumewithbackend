<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $post=$_POST['post'];
    $sql="INSERT INTO info(name,post) values('$name','$post')";
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