<?php
include('config.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM hobby where id='".$id."'";
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
    $nam=$_REQUEST['first'];
    $name=$_REQUEST['second'];
    $age=$_REQUEST['third'];
    $ae=$_REQUEST['fourth'];
    $update="UPDATE hobby set first='".$nam."',second='".$name."', third='".$age."', fourth='".$ae."' where id='".$id."'";
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
        <p><input type="text" name="first" placeholder="Interest" required value="<?php echo$row['first'];?>" /></p>
        <p><input type="text" name="second" placeholder="Interest" required value="<?php echo$row['second'];?>" /></p>
        <p><input type="text" name="third" placeholder="Interest" required value="<?php echo$row['third'];?>" /></p>
        <p><input type="text" name="fourth" placeholder="Interest" required value="<?php echo$row['fourth'];?>" /></p>
        <p><input name="submit" type="submit" value="Update" /></p>
    </form>
    </div>

    <?php } ?>

   