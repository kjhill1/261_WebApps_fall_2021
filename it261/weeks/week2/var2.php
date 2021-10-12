

<?php 

// More on vars, arithmetic, & additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';


$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = '100';
$money /=7;
echo $money;
echo '<br>';


// rounding decimal up and down
$money = '100';
$money /= 7;
$friendly_money = number_format($money,2);
echo $friendly_money;
echo '<br>';
$friendly_money = floor($money);
// FLOOR Rounds DOWN to no deciemels
echo $friendly_money;
echo '<br>';
echo '<br>';
$friendly_money = ceil($money);
// CEIL(ing)Rounds UP to no deciemels
echo $friendly_money;
echo '<br>';


// logic and calculations
// circumference and a circle = 2 pie(3.14) r(adius)
$radius = '10';
$pie = 3.14;
// No quotes Not an integer
$circumference = (2 * $pie) * $radius;

echo $circumference;

// LOGIC 1st 

// 22 degrees Celcius= ? in farenheight
// far = (C * 9/5) + 32

$celcius = 14;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<br>';
echo ' '.$friendly_far.' degrees';


// logic & exchange rate
// Canadian Dollors
// canadian = 100
// exchange = .79


$canada = 1433;
$canada *= .79;
echo '<br>';
echo $canada;

echo '<p>I have <b>$'.$canada.' </b> American Dollars!</p> ';

$canada = 1433;
$canada *= .79;
$friendly_canada = floor($canada);
echo '<p>I have <b>$'.$friendly_canada.' </b> American Dollars!</p> ';






