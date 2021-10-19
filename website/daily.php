<?php
include('includes/header.php'); ?>


<div id="wrapper">
<h2>What to play today!</h2>
    
 <?php 
 echo $band;
 ?>

<img class="bands" src="../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<p><?php echo $content;?></p>
</p><h2>Daily Does of Music:</h3></p>

 <ul>
  
  <li><a href="daily.php?today=Monday">Monday</a></li>
  <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
  <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
  <li><a href="daily.php?today=Thursday">Thursday</a></li>
  <li><a href="daily.php?today=Friday">Friday</a></li>

</ul>

<?php
include('includes/footer.php') ?>