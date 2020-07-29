<?php
include('config.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM about where id='".$id."'";
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
    $name=$_REQUEST['about'];
    $update="UPDATE about set about='".$name."' where id='".$id."'";
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
        <p><input type="text" name="about" placeholder="Enter About YOur Self" required value="<?php echo$row['about'];?>" /></p>
        <p><input name="submit" type="submit" value="Update" /></p>
    </form>
    </div>

    <?php } ?>

   