<?php
include('config.php');
include('includes/header.php'); ?>


<div id="wrapper" class="<?php echo $class?>">

<div id="day">
    <ul>
      
      <li><a href="daily.php?today=Monday">Monday</a></li>
      <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
      <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
      <li><a href="daily.php?today=Thursday">Thursday</a></li>
      <li><a href="daily.php?today=Friday">Friday</a></li>
      <li><a href="daily.php?today=Saturday">Saturday</a></li>
      <li><a href="daily.php?today=Sunday">Sunday</a></li>

    </ul>
</div>
<!-- ends section div-->

<h2 id="recommend">Recommendation of the Day</h2>

<div class="section">
<img class="soap" src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<div id="description">
<?php echo $soap;?>
<p><?php echo $content;?></p>
</div>
<!-- ends day div -->
</div>
<!-- ends description div-->

<?php
include('includes/footer.php') ?>