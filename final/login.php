<?php

ob_start();  
define('DEBUG', 'TRUE');

include('server.php');
include('includes/header.php');

// serve page connected to the config and config connected to the credentials page

?>

<h1 class="center">Login</h1>

<div id="wrapper">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<fieldset>
<label for="username">Username</label>
    <input id="username" type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']?>">

     <label for="password">Password</label>
     <input id="password" type="password" name="password">

     <button type="submit" name="login_user" class="btn">Login</button>

     <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'">Reset</button>

     <button type="submit" name="register" class="btn">Get a Login Here</button>

<?php include('errors.php');?>
</fieldset>

</form>


<?php include('includes/footer.php'); ?>