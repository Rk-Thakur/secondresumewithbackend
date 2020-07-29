<?php
include('config.php');
$id=$_REQUEST['id'];
$query="DELETE FROM experience WHERE id=$id";
$result=mysqli_query($conn,$query);
header("Location: index.php");
?>