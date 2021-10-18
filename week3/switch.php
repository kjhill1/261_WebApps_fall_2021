<?php
// class coffee exercise
// the inset() fuc (if something has been set)
// then intro our first GLOBAL break

// OUR switch

// start with isset (setting a variable)


// $variable = 'Life is a good!';
// if(isset($variable))  {
// if variable has been set we are going to do something else (var has not been set)
//     echo 'hippy-skippy!';
// }  else {
//     echo 'Not';
// }
// starting switch 
// if something is set, $today, the as is well
// else today is TODAY
// starting with the Global var $_GET
// GLobal Var are ALL CAPS and start with $_

if(isset($_GET['today'])) {
$today = $_GET['today'];
// var is assign $_GET

} else {
$today = date ('l');
}

// switch

switch ($today) {
    case 'Monday':
        $coffee = '<h2>Today is Pumpkin Latte!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit,';
        break;
    }

switch ($today) {
    case 'Tuesday':
        $coffee = '<h2>Today is Cappuccino!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino';
        $content = 'sed do <b>eiusmod</b> tempor incididunt ut labore et dolore magna aliqua.';
        break;
    }

    switch ($today) {
        case 'Wednesday':
            $coffee = '<h2>Today is Green Tea!</h2>';
            $pic = 'green-tea.jpg';
            $alt = 'Green Tea';
            $content = '<b>Ut enim</b> ad minim veniam';
            break;
        }

    switch ($today) {
        case 'Thursday':
            $coffee = '<h2>Today is Americano Day!</h2>';
            $pic = 'americano.jpg';
            $alt = 'Americano';
            $content = 'vel illum <b>qui dolorem</b> eum fugiat quo voluptas nulla pariatur';
            break;
        }

    switch ($today) {
        case 'Friday':
            $coffee = '<h2>Today is Regular Joe Day!</h2>';
            $pic = 'coffee.png';
            $alt = 'Regular Joe';
            $content = '<b>Quis autem</b> vel eum iure reprehenderit qui in ea voluptate velit';
            break;
        }
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<title>Switch Statements</title>
<style>


#wrapper {
    width: 940px;
    margin: 20px auto;

}


</style>


</head>
<body>
    <div id="wrapper">
      <h1>My Wonderful Switch Exercise</h1>
    
 <?php 
 echo $coffee;
 
 ?>

 <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<p><?php echo $content;?></p>
 <h2>Check out our daily specials</h2>

    <ul>

        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>

    </ul>

    </div>
    <!-- div ends wrapper -->
</body>
</html>




