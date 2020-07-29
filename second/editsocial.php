<?php
include('config.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM social where id='".$id."'";
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
    $name=$_REQUEST['facebook'];
    $age=$_REQUEST['twitter'];
    $ae=$_REQUEST['youtube'];
    $a=$_REQUEST['link'];
    $update="UPDATE social set facebook='".$name."', twitter='".$age."', youtube='".$ae."', link='".$a."' where id='".$id."'";
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
        <p><input type="text" name="facebook" placeholder="Enter fb username" required value="<?php echo$row['facebook'];?>" /></p>
        <p><input type="text" name="twitter" placeholder="Enter twitter username" required value="<?php echo$row['twitter'];?>" /></p>
        <p><input type="text" name="youtube" placeholder="Enter youtube username" required value="<?php echo$row['youtube'];?>" /></p>
        <p><input type="text" name="link" placeholder="Enter link username" required value="<?php echo$row['link'];?>" /></p>
        <p><input name="submit" type="submit" value="Update" /></p>
    </form>
    </div>

    <?php } ?>

   