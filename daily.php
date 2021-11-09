<?php
include('config.php');
include('includes/header.php'); ?>


<div id="wrapper" class="<?php echo $class?>">
<h2>What to play today!</h2>
    
 <?php 
 echo $band;
 ?>

<img class="bands" src="../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<p><?php echo $content;?></p>
<h3>Daily Does of Music:<br></h3>

<div class='daily'>
    <ul>
      
      <li><a href="daily.php?today=Monday">Monday</a></li>
      <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
      <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
      <li><a href="daily.php?today=Thursday">Thursday</a></li>
      <li><a href="daily.php?today=Friday">Friday</a></li>

    </ul>
</div>
<!-- end daily div -->

<?php
include('includes/footer.php') ?>