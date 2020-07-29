<div class="title">
           <p class="bold">skill's <a href="insertskill.html"><i class="fas fa-plus-circle"></i></a></p>
         </div>
         <ul>
         <?php
 include('config.php');
    $query="SELECT * FROM skill ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
           <li>
             <div class="skill_name">
               <?php echo $row["skill"]?>
             </div>
             <div class="skill_progress">
               <span style="width: <?php echo $row["percentage"]?>%;"></span>
             </div>
             <div class="skill_per"><?php echo $row["percentage"] ?>% <a href="deleteskill.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a></div>
           </li>
           
          <?php
          
    }
}?>
           
           
         </ul>



       
