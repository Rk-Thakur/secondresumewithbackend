<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume/CV Design</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="https://i.imgur.com/eCijVBe.png" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <?php
            include("info.php");
           ?>
         </div>
         <?php
         include("contact.php");
         ?>
       </div>
       <div class="resume_item resume_skills">
         <?php
         include("skill.php");
         ?>
       </div>
       <div class="resume_item resume_social">
         
         <?php
          include("social.php");
         ?>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <?php
    include("about.php");
    ?>
    <div class="resume_item resume_work">
        <?php
          include("experience.php");
        ?>
    </div>
    <div class="resume_item resume_education">
      <?php
        include("education.php");
      ?>
    </div>
    <div class="resume_item resume_hobby">
      <?php
      include("hobby.php");
      ?>
    </div>
  </div>
</div>

</body>
</html>