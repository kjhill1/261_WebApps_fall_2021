<?php

// home page of wonderful website?????

// after creating this page, will  have to login as a user or register 1st and then login 
session_start();

include('config.php');
include('includes/header.php');

// if user has no logged in correctly will be directed to login page. 

if(!isset($_SESSION['username'])) {
$_SESSION['msg'] = 'Must login first please.';
header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
    
}

// put header.php include here 

// notification message 
// if successful, welcome the end user.
if(isset($_SESSION['success'])) :?>
<div class="success">
    <h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']); ?>
</h3>
</div>
<!-- end success div -->


<?php endif ;


if(isset($_SESSION['username'])) : ?>
<div class="welcome-logout">
<h3> Well Hello <?php  echo $_SESSION['username']; ?>
</h3>
</div>
<p><a href="index.php?logout=1">Log out</a></p>
</div>
<!-- end welcome logout div -->

<?php endif ; ?>

<h1>Welcome To the Home Page</h1>


<!-- include footer here -->
