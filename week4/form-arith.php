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

<title>Arithmetic Form</title>


</head>
<body>
<form action="" method="post">

<fieldset>
    <label for="fname">First Name</label>
    <input type="text" name="fname">

    <label for="coffees">How many Coffees?</label>
    <input type="number" name="coffees">

    <label for="lattes">Lattes</label>
    <input type="number" name="lattes">

    <label for="caps">Caps</label>
    <input type="number" name="caps">


    <input type="submit" value="Send it!">

</fieldset>

</form>

<?php
// Form 3 - ADDING HTML & CSS
if(isset($_POST['fname'],
        $_POST['coffees'],
        $_POST['lattes'],
        $_POST['caps'])) {

        $fname = $_POST['fname'];
        $coffees = $_POST['coffees'];
        $int_coffees = intval($coffees);
        $lattes = $_POST['lattes'];
        $int_lattes = intval($lattes);
        $caps = $_POST['caps'];
        $int_caps= intval($caps);


        $total = $int_coffees + $int_lattes + $int_caps;
       
        
    // nesting if/else statement

    if(empty($fname && $int_coffees && $int_lattes && $int_caps)) 
    {
        echo '<h3>Please fill out the input fields</h3>';
    } else {
    //    echo $fname;
    //    echo $lname;
    //    echo $email;
    //    echo $comments;
    // CAN echo between body tags not $ERROR CANNOT ECHO BEFORE DOCTYPE
    echo '
    
    <div class="box">
       <h2>Hello '.$fname.'! </h2>
       <p>You have ordered the following</p>
       <ul>

            <li>'.$int_coffees.' Coffees</li>
            <li>'.$int_lattes.' Lattes</li>
            <li>'.$int_coffees.' Caps</li>

            <p>Totalling '.$total.' beverages</p>



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

{
echo '<h2>You added ". $num1 ." and .$num2. '"';
echo ' <p> and the answer is <br> $myTotal ."!"</p>;
echo'<p><a href="">Reset page</a>'
}