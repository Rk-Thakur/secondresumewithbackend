<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $skill=$_POST['about'];
    $sql="INSERT INTO about(about) values('$skill')";
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