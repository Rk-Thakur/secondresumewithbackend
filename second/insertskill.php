<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['skill'];
    $post=$_POST['percentage'];
    $sql="INSERT INTO skill(skill,percentage) values('$name','$post')";
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