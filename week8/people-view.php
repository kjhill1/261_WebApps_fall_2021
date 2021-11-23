<?php

// people-view.php

include('config.php');

// if isset $_GET['today'] <exp class="">


if(isset ($_GET ['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id='.$id.'';

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
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $description = stripslashes($row['description']);
        $blurb = stripslashes($row['blurb']);
        $feedback = '';
    } 
    // end while
} else {
    $feedback = 'Something is not working.';

}
include('includes/header.php');

?>

<main>
<h1>Welcome to <?php echo $first_name ?>'s page!</h1>

<?php if($feedback == '') {
echo '<ul>';
echo '<li><b>First Name: </b>'.$first_name.'</li>';
echo '<li><b>Last Name: </b>'.$last_name.'</li>';
echo '<li><b>Email: </b>'.$email.'</li>';
echo '<li><b>Birthdate: </b>'.$birthdate.'</li>';
echo '<li><b>Occupation: </b>'.$occupation.'</li>';
echo '</ul>';

echo '<p>'.$description.'</p>';
echo '<p>'.$blurb.'</p>';

echo '<p>Return back to the <a href="people.php">People Page.</a></p>';

}

?>

</main> 

<aside>

<?php 
if($feedback == '') {
    echo '<img class="center" src="images/people'.$id.'.jpg" alt="'.$first_name.'">';
    echo '<p class="blurb">'.$blurb.'</p>';
}

?>
</aside>

</div>
<!-- closes wrapper div -->
<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');

