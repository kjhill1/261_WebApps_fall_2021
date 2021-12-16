<?php
//  for PROJECT PAGEview.php

include('config.php');
include('includes/header.php');


if(isset ($_GET ['soap_id'])) {
$soap_id = (int)$_GET['soap_id'];

} else {
    header('Location: shop.php');
}

$sql = 'SELECT * FROM soap WHERE soap_id='.$soap_id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
// AND... if we cannot connect to the database... we DIE
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a var $result assigning query to results

$result= mysqli_query($iConn, $sql)
//if we cannot extract data....
 or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


 if(mysqli_num_rows($result) > 0){
    //  if there are more than more than ZERO rows, GOOD ---- and the while loop will return array
    while($row = mysqli_fetch_assoc($result)) {

        // no echoing we assigning first name to var $first_name
        $soap_id = stripslashes($row['soap_id']);
        $soap_name = stripslashes($row['soap_name']);
        $skin_types = stripslashes($row['skin_types']);
        $description = stripslashes($row['description']);
        $oils = stripslashes($row['oils']);
        $scent = stripslashes($row['scent']);
        $botanicals = stripslashes($row['botanicals']);
        $weight = stripslashes($row['weight']);
        $price = stripslashes($row['price']);
        $availability = stripslashes($row['availability']);
    } 
    // end while
} else {
    $feedback = 'Something is not working.';
    
}

?>

<div id="soap_wrapper">
<main id="view">
<h1>Learn More About <?php echo $soap_name ?> Properties and Uses</h1>

<?php if($feedback == '') {
echo '<ul>';
echo '<li><b>Blend: </b>'.$soap_name.'</li>';
echo '<li><b>Item ID: </b>'.$soap_id.'</li>';
echo '<li><b>Best for </b>'.$skin_types.' skin types</li>';
echo '<li><b>Scent: </b>'.$scent.'</li>';
echo '<li><b>Oils: </b>'.$oils.'</li>';
echo '<li><b>Botanicals: </b>'.$botanicals.'</li>';
echo '<li><b>Weight: </b>'.$weight.'</li>';
echo '<li><b>Price: </b>'.$price.'</li>';
echo '<li><b>Availability: </b>'.$availability.'</li>';
echo '<li><b>Description: '.$description.'</b></li>';
echo '</ul>';
echo '<p>Return to <a href="shop.php"> Shopping Page.</a></p>';
}

?>

</main> 

<aside>

<?php 
if($feedback == '') {
    echo '<img class="center" src="images/soap'.$soap_id.'.JPG" alt="'.$soap_name.'">';
    // echo '<p class="description">'.$description.'</p>';
}

?>
</aside>

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');

