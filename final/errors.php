<?php
// errors page

// logic: more than 0 errors need an error message to input

// if end user doe snot inout email error messages display
// array_push($errors, "Email is requires")
// cannot echo an array - for each loop with use foreach loop

// counting errors if greater than zero problems


if(count($errors) > 0 ) : ?>

<div class="error"><?php foreach ($errors as $errors) :?>

  <p><?php echo $errors; ?></p>

  <?php endforeach; ?>


</div>

<?php endif; ?>

