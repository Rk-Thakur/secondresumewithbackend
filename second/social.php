
         <?php
 include('config.php');
    $query="SELECT * FROM social ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
    <div class="title">
           <p class="bold">Social <a href="editsocial.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a></p>
         </div>
         <ul> 
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p><?php echo $row['facebook']?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p><?php echo $row['twitter']?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <p><?php echo $row['youtube']?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p><?php echo $row['link']?></p>
             </div>
           </li>
           <?php
           
    }
}
?>
         </ul>