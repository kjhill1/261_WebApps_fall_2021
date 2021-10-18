<?php
// the IF statement 
// Logic:
// IF the temperature is less than 90 degrees all is well
// ELSE it is going to be a Cooker

$temp = 91;
if($temp <= 90) {
    echo 'not that hot';
} else {
    echo 'It\'s a scorcher';
 }

// IF my temp is less than or equal to 90 will say not that hot, if greater will say scorcher 

echo '<br>';
// extend the IF statement, with false statement

$temp = 75;
if($temp <= 76) 
{
echo 'It is livable';
} elseif ($temp >= 85){ 
    echo 'It\'s is getting hotter';

}else { 
    'It\'s really hot';

}

echo '<br>';

$temp = 91;
if($temp <= 76) 
{
echo 'It is livable';
} elseif ($temp >= 85){ 
    echo 'It\'s is getting hotter';

}else { 
    'It\'s really hot';
}

echo '<br>';
// fun with logic

// // if my sales are over 800k I will make a 10% bonus of base salary
// if my sales are greater than or equal to 600k  I will make 5%
// low no bonus

$sales = 599000;
$salary = 200000;
if ($sales >= 8000000) {
    $salary *= 1.10;
    echo $salary;
    // if sales are over 800k saying if salary is 200000*1.10% salary will be 220; if sales are over 800k

} elseif($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
}

else{
    echo $salary;
}

?>


