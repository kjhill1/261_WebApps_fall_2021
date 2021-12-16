<?php
include('config.php');
include('includes/header.php'); 
?>

<?php
session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = 'You must log in first';
    //redirect them to the login page
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    //redirect them back to the login page
    header('Location: login.php');
}

if(isset($_SESSION['username'])) : ?> 
<p><?php echo 'Hello '; ?>
<?php echo $_SESSION['username']; ?>
<a href="index.php?logout='1' ">  Log out!</a></p>

<?php endif ?>

<div id="wrapper">
<h1><?php echo $headline;?></h1><br>
    <div class="container">
        <img class="hero" src="images/soap_tues.JPG" alt="logo">
        <img class="hero" src="images/soap_wed.JPG" alt="logo">
        <img class="hero" src="images/soap_fri.JPG" alt="logo">

    </div> 
<!-- closes container -->

<?php include('includes/footer.php'); ?>