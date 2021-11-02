
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Our Calculate</title>

<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">
<legend> Driving Calculator V1</legend>
<fieldset>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST ['name']); ;?>">

    <label for="miles">How Many miles will you be driving?</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST ['miles']); ;?>">

    <ul>
        <li><input type="radio" name="ppg" value="$3.00"
       <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '$3.00') 
       echo 'checked ="checked" ';?>>$3.00</li>


        <li><input type="radio" name="ppg" value="$3.50" 
        <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '3.50') 
       echo 'checked ="checked" ';?>
        >$3.50</li>

        <li><input type="radio" name="ppg" value="$4.00" 
        <?php if(isset($_POST['ppg']) && $_POST['ppg'] == '$4.00') 
       echo 'checked ="checked" ';?>>$4.00</li>

    </ul>

<label for="efficient">Fuel Efficiency</label>
<select name="efficient">
    <option value="" NULL <?php if(isset($_POST['efficient']) && $_POST['efficient'] == NULL) echo 'selected= "unselected" ';?>>Select One!</option>
    <option value="Terrible" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'terrible') echo 'selected= "selected" ';?>>Terrible</option>
    <option value="OK" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'ok') echo 'selected= "selected" ';?>>OK</option>
    <option value="Good" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'good') echo 'selected= "selected" ';?>>Good</option>
    <option value="Very Good" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == 'very_good') echo 'selected= "selected" ';?>>Very Good</option>

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
        echo '<span class="error">Please enter how many miles you will be driving.</span>';
    }
    if(empty($_POST['ppg'] )) {
        echo '<span class="error">Please enter a Price Per Gallon</span>';
    }

    if($_POST ['efficient'] == NULL) {
        echo '<span class="error">Please choose a level of efficiency</span>';
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
            $efficient= $_POST['efficient'];
            $total = $ppg * $miles;
            
                
             echo '<div class="box">
             <h2>Hello '.$name.'</h2>
             <p>Your trip will cost: <b> '.$total.'</b>!</p>
             </div>';

    } 
    // close isset
    }
  // ENDS SERVER REQUEST - GLOBAL VAR & Request method -->

?>


</body>
</html>