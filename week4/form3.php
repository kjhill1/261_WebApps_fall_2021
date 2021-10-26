<!-- if php is before doctype CANNOT echo must use $error  -->

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<style>


form {
    width:400px;
    margin:0 auto;
}

fieldset {
    border: red 4px solid;
    padding:10px;
}

label, textarea {
    display: block;
    margin: 5px
}

input, textarea {
    margin-bottom:10px;
}

input [type=text], input[type=email], textarea {
    width:90%;
}

h3 {
    color: red;
    text-align:center;

}

.box {
    width: 400px;
    margin: 0 auto;
    background-color: beige;

}

</style>

<title>Form 3 with HTML & CSS</title>


</head>
<body>
<form action="" method="post">

<fieldset>
    <label for="fname">First Name</label>
    <input type="text" name='fname'>
    <label for="lname">Last Name</label>
    <input type="text" name='lname'>
    <label for="email">Email</label>
    <input type="emails" name='email'>
    <label for="comments">Comments</label>
    <textarea name="comments"></textarea>
    <input type="submit" value="Send it!">

</fieldset>

</form>

<?php
// Form 3 - ADDING HTML & CSS
if(isset($_POST['fname'], 
        $_POST['lname'],
        $_POST['email'], 
        $_POST ['comments'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        
    // nesting if/else statement

    if(empty($fname && $lname && $email && $comments)) {
        echo '<h3>Please fill out the input fields</h3>';
    } else {
    //    echo $fname;
    //    echo $lname;
    //    echo $email;
    //    echo $comments;
    // CAN echo between body tags not $ERROR CANNOT ECHO BEFORE DOCTYPE
    echo '
    
    <div class="box">
        <ul>
            <li><b>First Name:</b> '.$fname.'</li>
            <li><b>Last Name:</b> '.$lname.'</li>
            <li><b>Email:</b> '.$email.'</li>
            <li><b>Comments:</b> '.$comments.'</li>
        </ul>
    </div>
    ';

    }
    // ends else
    
    }

// end isset

?>

</body>
</html>