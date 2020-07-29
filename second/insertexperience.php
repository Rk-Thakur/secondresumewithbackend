<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $firstdate=$_POST['firstdate'];
    $enddate=$_POST['enddate'];
    $post=$_POST['post'];
    $description=$_POST['description'];
    $sql="INSERT INTO experience(firstdate,enddate,post,description) values('$firstdate','$enddate','$post','$description')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location: index.php");
        //echo("data inserted");
    }else{
        echo("data not inserted").mysqli_error($conn);
    }
}

?>