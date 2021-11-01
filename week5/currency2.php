
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Our Currency TWO Form with Drop Down Select Option<</title>

<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">
<legend>Our Currency TWO Form</legend>
<fieldset>
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="email">Email</label>
    <input type="email" name="email">
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

<label for="bank">Choose Your Banking Institution</label>
<select name="bank">
    <option value="" NULL>Select One!</option>
    <option value="boa">BoA</option>
    <option value="usaa">USAA</option>
    <option value="key">Key Bank</option>
    <option value="becu">BECU</option>
    <option value="mattress">Mattress</option>
    

</select>
    <input type="submit" value="Convert it!">
    <p><a href="">Reset Me!</a></p>

</fieldset>

</form>

<?php

 if($_SERVER ['REQUEST_METHOD'] == 'POST') {
   // if each or any field is empty will display a specific message (echo)
    if(empty($_POST['name'] )) {
        echo '<span class="error">Please fill out your name</span>';
    }
    if(empty($_POST['email'] )) {
        echo '<span class="error">Please enter your email</span>';
    }
    if(empty($_POST['amount'] )) {
        echo '<span class="error">Please enter an amount</span>';
    }
    if(empty($_POST['currency'] )) {
        echo '<span class="error">Please choose a currency</span>';
    }
    // if post bank is null 'select your bank'
    if($_POST ['bank'] == NULL) 
    // null triggers error message
    // "null: NOT NULL (with out quotes marks. )
    {
        echo '<span class="error">Do you want your money? Then please select a bank</span>';
    }
    if(isset( 
        $_POST['name'],
        $_POST['email'], 
        $_POST['amount'],
        $_POST['currency'],
        $_POST['bank']
        
        )) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $amount= $_POST['amount'];
            $currency = $_POST['currency'];
            $bank= $_POST['bank'];
            $total = $amount * $currency;
        
            $friendly_total = number_format($total, 2);
                
             echo '<div class="box">
             <h2>Hello '.$name.'</h2>
             <p>You now have $'.$friendly_total.' American Dollars and in will be deposited into your account at <b>'.$bank.'</b>! We will be sending you and email at <b>'.$email.'</b></p>
             </div>';


    } 
    // close isset
    }
  // ENDS SERVER REQUEST - GLOBAL VAR & Request method -->

?>


</body>
</html>