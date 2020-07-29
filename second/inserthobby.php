<?php
include_once("config.php");
if(isset($_POST['submit'])){
    
    $firstdate=$_POST['first'];
    $enddate=$_POST['second'];
    $post=$_POST['third'];
    $company=$_POST['fourth'];
    $sql="INSERT INTO hobby(first,second,third,fourth) values('$firstdate','$enddate','$post','$company')";
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