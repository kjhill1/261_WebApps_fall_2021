<?php
include('config.php');
include('includes/header.php'); ?>

<div id="shop_wrapper">

    <main id="shop">  
    <h1><?php echo $headline;?></h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>

        <?php


$sql = 'SELECT * FROM soap';


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or

die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result= mysqli_query($iConn, $sql)

 or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)) {

    // calling out row array
    echo ''.$row['soap_name'].', please click<a href="view.php?soap_id='.$row['soap_id'].'"> here.</a>';
    echo '<ul>';
   echo '<li><p>Item ID: '.$row['soap_id'].'</p></li>';
   echo '<li><p>Best for '.$row['skin_types'].' skin types</p></li>';
       echo '</ul>';

} 
// closes while ;

} else {
    echo 'Houston, we have a problem.';
}

mysqli_free_result($result);
mysqli_close($iConn);


?>
</main>



<?php
include('includes/footer.php'); ?>