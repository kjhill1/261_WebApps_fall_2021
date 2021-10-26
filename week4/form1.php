<?php
// our first form
// form elements and attr are most IMPORTANT!
// using global var $_POST


// the two items will have is - the two input field will be name and email

if(isset($_POST['name'], 
        $_POST['email'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];

if(empty($_POST['name'] &&
        $_POST['email'])) {
        echo 'Please fill out the form';
        } else {
            echo $name;
            echo '<br>';
            echo $email;
        }

    } else {
        echo '
        <form action="" method="post">
            <label>NAME</label>
            <input type="text" name="name">


            <form action="" method="post">
            <label>EMAIL</label>
            <input type="email" name="email">
<input type="submit" value="Send it!!!">
        </form>
        ';
    }