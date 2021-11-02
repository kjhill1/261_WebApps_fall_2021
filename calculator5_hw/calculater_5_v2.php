
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Calculate Step 1 wk 5</title>

<link href="css/style_hw5.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">
<legend>Calculate Step 1 wk 5</legend>
<fieldset>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST ['name']); ;?>">

    <label for="miles">Miles</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST ['miles']); ;?>">

    

    <ul>
        <li><input type="radio" name="ppg" value="3.00"
       <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '3.00') 
       echo 'checked ="checked" ';?>>$3.00</li>


        <li><input type="radio" name="ppg" value="3.50" 
        <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '3.50') 
       echo 'checked ="checked" ';?>
        >$3.50</li>

        <li><input type="radio" name="ppg" value="4.00" 
        <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '4.00') 
       echo 'checked ="checked" ';?>>$4.00</li>
    </ul>

<label for="efficient">Choose Your Vehicles Efficiency</label>
<select name="efficient">
    <option value="" NULL <?php if(isset($_POST['efficient']) && $_POST['efficient'] == NULL) echo 'selected= "unselected" ';?>>Select One!</option>
    <option value="terrible" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'terrible') echo 'selected= "selected" ';?>>Terrible</option>
    <option value="OK" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'OK') echo 'selected= "selected" ';?>>OK</option>
    <option value="Good" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'Good') echo 'selected= "selected" ';?>>Good</option>
    <option value="Very Good" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'Very Good') echo 'selected= "selected" ';?>>Very Good</option>
    

</select>
    <input type="submit" value="Convert it!">
    <p><a href="">Reset Me!</a></p>

</fieldset>

</form>

<?php

 if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'] )) {
        echo '<span class="error">Please fill out your name</span>';
    }

    if(empty($_POST['miles'] )) {
        echo '<span class="error">Please enter your miles</span>';
    }
   
    if(empty($_POST['ppg'] )) {
        echo '<span class="error">Please choose a ppg</span>';
    }

    if($_POST ['efficient'] == NULL) {

        echo '<span class="error">Please Choose Your Vehicles Level</span>';
    }
    

    if(isset( 
        $_POST['name'],
        $_POST['miles'], 
        $_POST['ppg'],
        $_POST['efficient']) &&
        is_numeric($_POST ['miles'])
        )  {
        
    
            $name= $_POST['name'];
            $miles= $_POST['miles'];
            $ppg = $_POST['ppg'];
            $bank= $_POST['efficient'];
            $total = $miles * $ppg;
            $friendly_total = number_format($total, 2);
                
             echo '<div class="box">
             <h2>Hello '.$name.'</h2>
             <p>Your Trip Cost '.$friendly_total.'</p>
             </div>';

    } 
    // close isset
    }
  // ENDS SERVER REQUEST - GLOBAL VAR & Request method -->

?>


</body>
</html>