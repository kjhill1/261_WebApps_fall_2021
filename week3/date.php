<?php
// for date function

//code: l=day, jS=number day, \of=month, f???? Y=year, time=H:h:i:sAM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';
// has to call out timezone 
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");



// uppercase changes it from 12 hour clock to a 24 hour clock
// changed time from a 12 hour clock to 24 hour clock
// want to use an else/if statement showing different message based on time of day
// "if time is let than 11am it is morning
// If time is less than 16 it is afternoon
// else it is evening"
 


// need to assign our date to a var


$time=date("H:i");
if($time <= 11){
echo '<h2 style="color:yellow;">Good Morning</h2>';

}elseif($time <= 16){
    echo '<<h2 style="color:azure;">Good Afternoon</h2>';

}else {
    echo '<h2 style="color:purple;">Good Evening</h2>';

}