<?php

include('config.php');
include('includes/header.php');
?>
<main>
<h1>Welcome to My People's Page Class Exercise</h1>


<?php
// for big database assignment, your header include would go right header_register_callback
// need to grab table and assign to a var

$sql = 'SELECT * FROM people';

// we need to connect to database using mysqli_connect() function

// assigning to var

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
// AND... if we cannot connect to the database... we DIE
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a var $result assigning query to results

$result= mysqli_query($iConn, $sql)
//if we cannot extract data....
 or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for if statement ---if we have more than ZERO ROWS YAYAYYAY!
if(mysqli_num_rows($result) > 0){
//  if there are more than more than ZERO rows, GOOD ---- and the while loop will return array
while($row = mysqli_fetch_assoc($result)) {

    // calling out row array
    echo '<p>For More info about '.$row['first_name'].', please click<a href="people-view.php?" id="'.$row['people_id'].'"> here.</a></p>';
    echo '<ul>';
   echo '<li>'.$row['first_name'].'</li>';

   echo '<li>'.$row['last_name'].'</li>';
   echo '<li>'.$row['email'].'</li>';
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

<aside>

</aside>
</div>
<!-- closes wrapper div -->
<?php
include('includes/footer.php');


