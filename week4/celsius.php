<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Celsius Form</title>

<link href="css/style.css" type="test/css" rel="stylesheet">

</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<fieldset>

    <legend>Our Celsius Form</legend>
        <label for="cel">Enter your Celsius Value:</label>


        <input type="number" name="cel">
        <input type="submit" value="Convert It!">

        <p><a href="">Reset</a></p>

</fieldset>

</form>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) + 32;

    if($cel == NULL) {
        echo 'Please Enter your Celsius Value';
    }
        elseif($far <= 32){
            echo  ' '.$far.' degrees and it is pretty cold!';

        } elseif($far <= 40){
            echo  ' '.$far.' degrees and it is kind of cold!';

        } elseif($far <= 50){
            echo  ' '.$far.' degrees and it is getting warmer!';

        } elseif($far <= 60){
            echo  ' '.$far.' degrees and I\'m liking it!';

        } elseif($far <= 70){
            echo  ' '.$far.' degrees and I\'m really liking it';

        }
        elseif($far <= 80){
            echo  ' '.$far.' degrees and I\'m going swimming';

        } elseif($far <= 95){
            echo  ' '.$far.' degrees and it\'s getting Hot';

        } else {
            echo  ' '.$far.' degrees and it\'s a cooker';
        }

    }
//END ISSET

    } 
//END SERVER POST

?>

</body>
</html>