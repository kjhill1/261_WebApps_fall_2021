<?php
// our second form
// form elements and attr are most IMPORTANT!
// using global var $_POST


// the two items will have is - the two input field will be name and email

if(isset($_POST['fname'], 
        $_POST['lname'],
        $_POST['email'], 
        $_POST ['comments'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

if(empty($_POST['fname'] &&
        $_POST['lname'] &&
        $_POST['email'] &&
        $_POST['comments'])){
        echo 'Please fill out the fields';
        } else {
            echo $fname;
            echo '<br>';
            echo $lname;
            echo '<br>';
            echo $email; 
            echo '<br>';
            echo $comments;            
        }

    } else {
        echo '
        <form action="" method="post">
                <label>FIRST NAME</label>
                <input type="text" name="fname">
            
                <label>LAST NAME</label>
                <input type="text" name="lname">

                <label>EMAIL</label>
                <input type="email" name="email">

                <label>COMMENTS</label>
                <textarea name="comments"></textarea>
                
                <input type="submit" value="Send it!!!">
        </form>
        ';
    }