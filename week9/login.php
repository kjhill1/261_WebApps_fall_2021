<?php

// login page 
// inout for username and password

include('server.php');
include('includes/header.php');

// serve page connected to the config and config connected to the credentials page

// include('header.php');

?>

<h1 class="center">Login</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<fieldset>
<label for="username">Username</label>
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']?>">

     <label for="password">Password</label>
     <input type="password" name="password">

     <button type="submit" name="login_user" class="btn">Login</button>

     <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'">Reset</button>

<?php
include('errors.php');
  
     ?>
</fieldset>

</form>