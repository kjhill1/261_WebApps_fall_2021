
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Calculate Step 2 wk 5</title>

<link href="css/style_hw5.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">
<legend>Calculate Step 2 wk 5</legend>
<fieldset>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST ['name']); ;?>">

    <label for="miles">Miles</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST ['miles']); ;?>">

    <label for="hours">Hour Driving Per Day</label>
    <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST ['hours']); ;?>">

    

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
    <option value="25" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '25') echo 'selected= "selected" ';?>>Terrible</option>
    <option value="50" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '50') echo 'selected= "selected" ';?>>OK</option>
    <option value="75" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '75') echo 'selected= "selected" ';?>>Good</option>
    <option value="100" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '100') echo 'selected= "selected" ';?>>Very Good</option>

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

    if(empty($_POST['hours'] )) {
        echo '<span class="error">Please Choose how many hour per day will you be driving?</span>';
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
        $_POST['hours'],
        $_POST['ppg'],
        $_POST['efficient']) &&
        is_numeric($_POST ['miles'])
        )  {
        
    // need 2 equations here: total cost for gas and miles per $ppg AND ???? # of hours driven? ????

            $name= $_POST['name'];
            $miles= $_POST['miles'];
            $ppg = $_POST['ppg'];
            $_POST['hours'];
            $efficient= $_POST['efficient']);
            // something need to go here from labels - 
        
        }
            

            // ABOVE NEED to add the following equations
            // NEED 1st Equation to get an =$answer
            // NEED 2nd equation that will include the $answer & another var/value = $answer #2
            // NEED FINAL EQUATION HERE that include the  #answer #3 & another var/Value
            
            
                

            // Total Miles Driven directly from form input
             echo '<div class="box">
             <p>You have Driven '.$miles.' miles</p>
             </div>';

            //  total for efficiency rating will be the value assigned to the efficiency (25, 50, 75, 100) & ????????????????
             echo '<div class="box">
             <p>You vehicle has an efficiency rate of '.$miles.' miles</p>
             </div>';

            //  total cost for gas is how many miles per gallon, how many hours driven, cost of gas
                 
             echo '<div class="box">
             <p>Total Cost for your gas will be '.$miles.' miles</p>
             </div>';
             
    } 
    // close isset
    }
  // ENDS SERVER REQUEST - GLOBAL VAR & Request method -->

?>


</body>
</html>