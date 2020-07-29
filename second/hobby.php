<div class="title">
           <p class="bold">Hobby <a href="inserthobby.html"><i class="fas fa-plus-circle"></i></a></p>
         </div>
       <ul>
       <?php
 include('config.php');
    $query="SELECT * FROM hobby ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
         <li><?php echo $row['first']?></li>
         <li><?php echo $row['second']?></li>
         <li><?php echo $row['third']?></li>
         <li><?php echo $row['fourth']?> </li>
         <?php $count++;?>
         <?php
    }
}
         ?>
      </ul>
      <a href="deletehobby.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i>Delete</a>
