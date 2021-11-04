
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Calculate Days Errors</title>

<link href="css/style_hw5.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">
<legend>Calculate Days Errors</legend>
<fieldset>
<label for="name">Name</label>
    <input type="name" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST ['name']); ;?>">
    <label for="miles">How many miles will you be driving?</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST ['miles']); ;?>">

    <label for="hours">How many hours per day will you be driving?</label>
    <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST ['hours']); ;?>">

    
<label for="ppg"> Price of Gas Per Gallon</label>
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

<label for="efficient">Choose Your Vehicle's Efficiency</label>
<select name="efficient">
    <option value="" NULL <?php if(isset($_POST['efficient']) && $_POST['efficient'] == NULL) echo 'selected= "unselected" ';?>>Select One!</option>
    <option value="10" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '10') echo 'selected= "selected" ';?>>Terrible</option>
    <option value="20" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '20') echo 'selected= "selected" ';?>>OK</option>
    <option value="30" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '30') echo 'selected= "selected" ';?>>Good</option>
    <option value="40" <?php if(isset($_POST['efficient']) && $_POST['efficient'] == '40') echo 'selected= "selected" ';?>>Very Good</option>

</select>
    <input type="submit" value="Convert it!">
    <p><a href="">Reset Me!</a></p>

</fieldset>

</form>

<?php

 if($_SERVER ['REQUEST_METHOD'] == 'POST') {
     $error_status = FALSE;
 

 if(empty($_POST['name']) || empty($_POST['miles']) || empty($_POST['hours']) || empty($_POST['ppg']) || $_POST['efficient'] == 'NULL'){
    echo '<span class="error">ERROR! Please fill out the form.</span>';
    $error_status = TRUE;

   }

    //  if(empty($_POST[''] )) {
    //     echo '<span class="error">ERROR! Please fill out the form.</span>';
    //     $error_status = TRUE;
    // }

    if(empty($_POST['name'] )) {
        echo '<span class="error">Please fill out your name.</span>';
        $error_status = TRUE;
    }

    if(empty($_POST['miles'] )) {
        echo '<span class="error">Please enter your miles</span>';
        $error_status = TRUE;
    }

    if(empty($_POST['hours'] )) {
        echo '<span class="error">Please Choose how many hour per day will you be driving?</span>';
        $error_status = TRUE;
    }

    if(empty($_POST['ppg'] )) {
        echo '<span class="error">Please choose a ppg</span>';
        $error_status = TRUE;
    }

    if($_POST ['efficient'] == NULL) {
        echo '<span class="error">Please Choose Your Vehicles Efficiency</span>';
        $error_status = TRUE;
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
            $miles= (int)$_POST['miles'];
            $hours= (int)$_POST['hours'];
            $ppg = (int)$_POST['ppg'];
            $efficient= (int)$_POST['efficient'];
              // total hours to drive is $mile want to drive divided by mph I choose 65 here. 
               if($efficient == 0) {
                   $efficient = 1;
               }        

            //   TOTAL COST OF GAS
              $totalGas = ($miles / $efficient) * $ppg;
              $friendly_totalGas = number_format($totalGas,2);

            // HOW MANY HOURS 
            $totalHours = $miles / 65;
            $friendly_totalHours =  floor($totalHours);
            if($totalHours == 0) {
                $totalHours = 1;
            }

            // HOW MANY DAY?
            $totalDays = $totalHours / $hours;
            $friendly_totalDays = floor($totalDays);
if($error_status == FALSE) {
           

            // Total Miles Driven directly from form input
             echo '<div class="box">
             <p>You have Driven '.$miles.' miles</p>
             </div>';

            //  total for efficiency rating will be the value assigned to the efficiency (25, 50, 75, 100) & ????????????????
             echo '<div class="box">
             <p>You vehicle has an efficiency rate of: '.$efficient.' mile per gallon</p>
             </div>';


            //  total cost for gas is how many miles per gallon, how many hours driven, cost of gas
                 
             echo '<div class="box">
             <p>Total Cost for your gas will be $'.$friendly_totalGas.'</p>
             </div>';
             


             echo '<div class="box">
             <p>You will be driving a total of '.$hours .' hours.</p>
             </div>';

             echo '<div class="box">
             <p>You will be driving a total of '.$friendly_totalDays.' days.</p>
             </div>';

}
// closes error statues
    } 
    // close isset
    }
  // ENDS SERVER REQUEST - GLOBAL VAR & Request method -->

?>


</body>
</html>