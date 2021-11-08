
<?php

// 1st emailable form - THis is an alternative way to because 
// CANNOT ECHO ABOVE THE DOC TYPE

   
    // This is what it looks like with echo
    // if(empty($_POST['first-name'] )) {
    //     echo '<span class="error">Please enter your name</span>';
    //     $error_status = TRUE;
    // }
    $first_name = '';
    $last_name = '';
    $email = '';
    $gender = '';
    $wines = '';
    $regions = '';
    $comments = '';
    $privacy = '';

    $first_name_Err = "";
    $last_name_Err = "";
    $email_Err = '';
    $gender_Err = "";
    $wines_Err = "";
    $regions_Err = "";
    $comments_Err = "";
    $privacy_Err = "";

    if($_SERVER ['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your first name';

    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $gender_Err = 'Please select your Gender';

    } else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['wines'])) {
        $wines_Err = 'Please enter your wines';
    } else {
        $wines = $_POST['wines'];
    }

    if($_POST['regions'] == NULL) {
        $regions_Err = 'Please select a region';
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err= 'Please leave a comment';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_Err = 'Please select.';
    } else {
        $privacy = $_POST['privacy'];
    }

    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy']))

    {
        $to = '1306homebase@gmail.com';
        $subject = 'Test Email,' .date('m/d/y');
        $body = '
        The First Name is: '.$first_name.' '.PHP_EOL.'
        The Last Name is: '.$last_name.' '.PHP_EOL.'
        Gender: '.$gender.' '.PHP_EOL.'
        Region '.$regions.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';

        mail($to, $subject, $body);
        header('Location: thx.php');

    }

}
// end server Request


?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Emailable Form #1</title>

<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">

<fieldset>
    <label for="first_name"><u>First Name</u></label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST ['first_name']); ;?>">
<span class="error"><?php echo $first_name_Err;?></span>

    <label for="last_name"><u>Last Name</u></label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST ['last_name']); ;?>">
<span class="error"><?php echo $last_name_Err;?></span>

    <label for="email"><u>Email</u></label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST ['email']); ;?>">
<span class="error"><?php echo $email_Err;?></span>

<label for="gender"><u>Choose a Gender You Identify With</u></label>

    <ul>
        <li><input type="radio" name="gender" value="female"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') 
       echo 'checked ="checked" ';?>>Female</li>
        <li><input type="radio" name="gender" value="male"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') 
       echo 'checked ="checked"';?>>Male</li>
        <li><input type="radio" name="gender" value="lgbtqa"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'lgbtqa') 
       echo 'checked ="checked" ';?>>LGBTQA</li>
        <li><input type="radio" name="gender" value="other"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') 
       echo 'checked ="checked" ';?>>Other</li>
    </ul> 
    <span class="error"><?php echo $gender_Err;?></span>

<label for="wines"><u>Wines</u></label>

    <ul>
        <li><input type="checkbox" name="wines[]" value="merlot"<?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"';?>>Merlot</li>
        <li><input type="checkbox" name="wines[]" value="cab"<?php if(isset($_POST['wines']) && in_array('cab', $wines))  echo 'checked="checked"';?>>Cab Sav</li>
        <li><input type="checkbox" name="wines[]" value="malbec"<?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"' ;?>>Malbec</li>
        <li><input type="checkbox" name="wines[]" value="chardonnay"<?php if(isset($_POST['wines']) && in_array('chardonnay', $wines)) echo 'checked="checked"' ;?>>Chardonnay</li> 
        <li><input type="checkbox" name="wines[]" value="viognier"<?php if(isset($_POST['wines']) && in_array('viognier', $wines))  echo 'checked="checked"';?>>Viognier</li>
    
    </ul> 
<span class="error"><?php echo $wines_Err;?></span>

<label for="regions"><u>Regions</u></label>

<select name="regions">
    <option value="" NULL<?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected"' ;?>
    
    >Select One</option>
    <option value="nw"<?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected="unselected"' ;?>>Northwest</option>
    <option value="sw"<?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected="unselected"' ;?>>Southwest</option>
    <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected="unselected"' ;?>>Northeast</option>
    <option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected="unselected"' ;?>>Southeast</option>
    </select>

    <span class="error"><?php echo $regions_Err;?></span>

<label for="comments">
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST ['comments']) ;?> </textarea>
    <span class="error"><?php echo $comments_Err;?></span>

    <label for="privacy"><u>Do you want privacy?</u></label>
        <ul>
            <li><input type="radio" name="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') 
       echo 'checked ="checked" ';?>>I agree!</li>
        </ul>
        <span class="error"><?php echo $privacy_Err;?></span>


    <input type="submit" value="Send it!">
    <p><a href="">Reset it!</a></p>


</fieldset>
</form>
</body>
</html>
    




