<?php
include('config.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM info where id='".$id."'";
$result=mysqli_query($conn,$sql);
if($result)
{
    $row=mysqli_fetch_assoc($result);

}
?>
<h1>Update Record</h1>
<?php
if(isset($_POST['new']))
{
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $age=$_REQUEST['post'];
    $update="UPDATE info set name='".$name."', post='".$age."' where id='".$id."'";
    $result=mysqli_query($conn,$update);
    if($result){
        //echo "record updated";
        header("Location: index.php");//redirect to view.php after successfully updated record
    }
    else{
        echo"Record not updated".mysqli_error($conn);
    }
    }else{
        ?>

        <div>
    <form name="form" method="post" action="">
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
        <p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo$row['name'];?>" /></p>
        <p><input type="text" name="post" placeholder="Enter Post" required value="<?php echo$row['post'];?>" /></p>
        <p><input name="submit" type="submit" value="Update" /></p>
    </form>
    </div>

    <?php } ?>

   