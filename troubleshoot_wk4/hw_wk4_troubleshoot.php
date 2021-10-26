<!-- this was a hilarious assignment -->

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >


<!-- *****I USED AN EXTERNAL STYLESHEET***** -->
<link href="css/style.css" type="text/css" rel="stylesheet">

<title>Adder Form - Corrected</title>

</head>
<body>
    <h1>Adder.php, one funny assignment</h1>

    <form action="" method="post">

        <fieldset>
            <label for="num1">Enter the first number:</label>
            <input type="text" name="num1">

            <label for="num2">Enter the second number:</label>
            <input type="text" name="num2">

            <input type="submit" value="Add Em!!"> 

            <p><a href="">Reset</a></p>
        </fieldset>

    </form>
<!-- ********START PHP********* -->

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['num1'],
            $_POST['num2'])){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

    $myTotal = $num1 + $num2; 

    if(empty($num1 && $num2)) {
                echo 'Please Enter a Value';
                } else {
                echo '<div class="box">
                <h2>You added '.$num1.' & '.$num2.'!</h2>
                <p>Your answer is '.$myTotal.'</p>
                
                </div>';
                }
            }
            }    
            

?>

    <!-- ERRORS
-Line 1, Moved to 34=lineCAnnot use Echo if PHP is before doctype - PHP nested
-Line 3 = Doc type was not called out - Doctype Added
-Line 11 & 13 =Stylesheet/CSS was not above Title
-Line 11 -color:red was not assigned to an element or put in the proper 
-Line 17 = form action was <\form action=""> was not open and no closing tag in doc
-Line 17 - no form method stated
-Line 22 & 23 = No opening Label Tags
-line 44 Num2 was capitalize, not constant in capitalization of num/Num should not be capitalized if variable is called as lowercase, need to use lowercase 
-Line 23 = num vs NUM (NUM is not consistent)
-Line 28 = double quotes missing around "Add Em at the end
-Line 34 = PHP moved to be nested in the html
Line 41 = 53 NO )) at the end of vars being called out
Line 40 = 21 Curly brackets not in right place need to be around vars being called
Line 40  = variable in if(isset should have commas not semi colons.
Line 52 = no br before x<h2>You added'.$num1.' & '.$num2.'!</h2> -->

</body>
</html>


