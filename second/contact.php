<ul>
  <?php
 include('config.php');
    $query="SELECT * FROM contact ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>   
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               <?php  echo $row['address']?> <a href="editcontact.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a>
               
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               <?php  echo $row['phone']?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
               <?php  echo $row['email']?>

             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
               <?php  echo $row['website']?>

             </div>
           </li>
           <?php
    }
}
           ?>
         </ul>