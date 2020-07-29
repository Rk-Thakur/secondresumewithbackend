<?php
 include('config.php');
    $query="SELECT * FROM about ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
<div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About us <a href="editabout.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a></p>
</div>
        <p><?php  echo $row["about"]?></p>
    </div>
    <?php $count++;?>

    <?php
    
    }
}
?>