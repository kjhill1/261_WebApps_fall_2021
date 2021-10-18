<?php
// for loops

for ($x = 0; $x <= 10; $x++)
// for (init counter; test counter; increment counter)  
// X starts out at Zero
// Loops through X until hits 10
// loop through x by increasing by 1

{
    echo "The number is: $x <br>";
}
echo '<br>';
// for (init counter; test counter; increment counter) {
//     code to be executed for each iteration;
//   }
  
//       init counter: Initialize the loop counter value
//       test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
//       increment counter: Increases the loop counter value
// EX 2
for ($x = 1; $x <= 21; $x+= 3)
// // for (init counter; test counter; increment counter)  
// // X starts out at 1
// // Loops through X until hits 21
// // loop through x by increasing ???couldn't hear??

{
    echo "The number is: $x <br>";
}
echo '<br>';

// A FOR LOOP FOR OUR FAMOUS Celsius  Fahrenheit Converter

// do NOT call out the celsius var OUTSIDE THE Loop

for ($celsius = 0; $celsius <= 100; $celsius++) {
    $far = ($celsius * 9/5) + 32;
    $friendly_far = floor($far);
    echo '<b>Fahrenheit:</b> '.$friendly_far.' <b>Celsius:</b> <span style="color:red; font-weight:bold;">' .$celsius.' </span><hr>';

    // echo 'Here is my String: '.$celsius.' Additional String Content'.$far.'';
}

echo '<br>';

// // Kilometers to mile
// for ($kms = 0; $kms <= 100; $kms++) {
//     $miles = ($kms * .62);
//     $friendly_miles = ceil($miles);
//     echo '<b> Miles: </b> '.$friendly_miles.' <b> Kilo</b> '.$kms.' <br>';


// }
