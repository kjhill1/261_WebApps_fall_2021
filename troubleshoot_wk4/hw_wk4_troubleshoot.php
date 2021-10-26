<!-- this was a hilarious assignment -->

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<style>
/* color:red for answer */
    
</style>


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
        </fieldset>

    </form>
<!-- 

    ********START PHP********* -->

    <?php
    if(isset($_POST['num1']
            $_POST['num2'])){


                // *****CHECK THESE - JUST COPIED AND PASTED error code*****
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $myTotal = $num1 + $num2; 

            }



?>
</body>
</html>



    <!-- ERRORS
-form action was <\form action=""> was not open and no closing tag in doc, no method stated
-Doc type was not called out - Doctype Added
-CAnnot use Echo if PHP is before doctype - PHP nested
-PHP moved to be nested in the html
 -Num2 not constant in capitalization of num/Num should not be capitalized if variable is called as lowercase, need to use lowercase 
 -Closing HTML Tag has punctuation errors

 -style was not in properly in doc
 -color:red was not assigned to an element or put in the proper 
 -label tags are were either missing or non-existent 
-double quotes missing around "Add Em -->
<!-- if.....['num1'])) NO )) at the end  here after called -->
<!-- Curly brackets not in right place need to be around vars being called -->



// START MESSED UP CODE
//adder-wrong.php

if(isset($_POST['num1']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2; {
echo '<h2>You added ". $num1 ." and .$num2. '"';
echo ' <p> and the answer is <br> $myTotal ."!"</p>;
echo'<p><a href="">Reset page</a>'
}


<!-- minus sign in front of equal sign -= --> 
