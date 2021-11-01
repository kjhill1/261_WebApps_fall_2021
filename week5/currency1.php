
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Basic Currency Form</title>

<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">
<legend>Our Currency Form</legend>
<fieldset>
    <label for="name">Name</label>
    <input type="text" name='name'>
    <label for="email">Email</label>
    <input type="email" name='email'>
    <label for="amount">How Much Money Do YOU HAVE?</label>
    <input type="number" name="amount">
    <label for="currency">Choose Your Currency</label>
    <ul>
        <li><input type="radio" name="currency" value="0.013">Rubels</li>
        <li><input type="radio" name="currency" value="0.76">Canadian</li>
        <li><input type="radio" name="currency" value="1.28">Pounds</li>
        <li><input type="radio" name="currency" value="1.18">Euro</li>
        <li><input type="radio" name="currency" value="0.0094">Yen</li>

</ul>
    <input type="submit" value="Convert it!">
    <p><a href="">Reset Me!</a></p>

</fieldset>

</form>

<?php

 if($_SERVER ['REQUEST_METHOD'] == 'POST') {

    if(empty(
        $_POST['name'] &&
        $_POST['email'] && 
        $_POST['amount'] && 
        $_POST['currency']
    )) {
        echo 'Please fill out all the fields';

    } elseif(isset( 
        $_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency']))
      
        {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];

        // when is comes to converting, what is the logic?

        $dollars = $amount * $currency;
        // $friendly_dollars = number_format($dollars, 2); will round to .00 decimal
         // $friendly_dollars = number_format($dollars, 0); will round to whole NO decimal
        
            $friendly_dollars = floor($dollars); 
            // floor rounds down ceil rounds up

            echo '
            <div class="box">
            <h2>Hello '.$name.'</h2>
            <p>You now have $'.$friendly_dollars.' American Dollars! We will be sending you and email at <b>'.$email.'</b></p>
            </div>
            ';

        // echo $dollars;
        // echo '<br>';
        // don't need quotes if not "saying" numbers

        // echo $name;

        }
        // ends elseif

    }
  // ENDS SERVER REQUEST - GLOBAL VAR & Request method -->

?>


</body>
</html>