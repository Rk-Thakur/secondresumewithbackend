<div class="title">
           <p class="bold">Work Experience <a href="experience.html"><i class="fas fa-plus-circle"></i></a></p>
         </div>
<ul>
<?php
 include('config.php');
    $query="SELECT * FROM experience ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?> 


            <li>  
                <div class="date"><?php echo $row['firstdate']?> - <?php echo $row['enddate']?> <a href="deleteexperience.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a></div> 
                <div class="info">
                     <p class="semi-bold"><?php echo $row['post']?></p> 
                  <p><?php echo $row['description']?></p>
                </div>
            </li>
            
        <?php
    }
}
?>

</ul>

