<?php
include('config.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM contact where id='".$id."'";
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
    $nam=$_REQUEST['address'];
    $name=$_REQUEST['phone'];
    $age=$_REQUEST['email'];
    $ae=$_REQUEST['website'];
    $update="UPDATE contact set address='".$nam."',phone='".$name."', email='".$age."', website='".$ae."' where id='".$id."'";
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
        <p><input type="text" name="address" placeholder="Enter Address" required value="<?php echo$row['address'];?>" /></p>
        <p><input type="number" name="phone" placeholder="Enter PHone number" required value="<?php echo$row['phone'];?>" /></p>
        <p><input type="email" name="email" placeholder="Enter email" required value="<?php echo$row['email'];?>" /></p>
        <p><input type="text" name="website" placeholder="Enter website" required value="<?php echo$row['website'];?>" /></p>
        <p><input name="submit" type="submit" value="Update" /></p>
    </form>
    </div>

    <?php } ?>

   