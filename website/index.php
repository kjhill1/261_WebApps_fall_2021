<?php
include('config.php');
include('includes/header.php'); ?>

<div id="wrapper">
<h1>This is my 1st Website for it261</h1>
<div id="hero"><?php echo random_pics($photos);?>
</div> <!-- closes hero -->
<h2>
<pre>function random_pics($photos) {
$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';
echo "<img src="images/'.$selected_image.'" alt=" '.$phtos[$i].'">";
}

</pre>
</h2>



    <main>
        <h1><?php echo $headline;?></h1><br>
  
        <p>I love Halloween. The one time of year when everyone wears a mask … not just me. I am not a killer. I'm a sociopath; there's not much he can do for me. Finding a needle in a haystack isn't hard when every straw is computerized.</p>
    </main>
   
<aside>
test aside
</aside>


<?php
include('includes/footer.php'); ?>