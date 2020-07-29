<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['facebook'];
    $post=$_POST['twitter'];
    $pot=$_POST['youtube'];
    $pt=$_POST['link'];
    $sql="INSERT INTO social (facebook,twitter,youtube,link) values('$name','$post','$pot','$pt')";
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