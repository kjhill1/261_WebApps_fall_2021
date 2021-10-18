<?php
// // no closing needed if all Code is PHP with no HTML
// this is my intro to var
// // variable is a container for information
// statenets end with semi-colon

$name ='Kelly';
$weather ='Today is a typical Fall Day';
// name is variable kelly is assigned (=) to name variable 
// single quotes infers a string

$body_temp = 97.4;
// integer NO QUOTES
// 97.4 is a float 97 is an interger (no deciaml)


// to see name in browser window, call out echo
echo $name;
echo '<br>';
// 3 ways to use echo  name
// name needs no quotes 
echo 'My Name is $name';
echo '<br>';
echo '<br>';
echo "My Name is $name";
echo '<br>';

// // have to use DOUBLE quotes to call out actual Variables (single quote will discplay $name)
// BUT gets mess for nesting ?? use break tags. 


// FIXED with single quotes 

echo 'My name is '.$name.' '; 
echo '<br>';
echo $weather;
echo '<br>';
// no quotes when only calling out variable
echo $body_temp;
echo '<br>';
echo 'My normal body tempature is '.$body_temp.' and all is well';
echo '<br>';
$name = 'Chrystal';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo '<br>';
echo $z;
echo '<br>';
$z = $x * $y;
echo $z;
echo '<br>';

$first_name = 'Kelly Jean ';
$last_name = 'Hill';
echo '<br>';
echo $first_name.'  '.$last_name;
// joining first name and last name BUT JACKED OUT this way $first_name$last_nameHere is my name with-----
echo '<br>';
echo ' '.$first_name.' '.$last_name.' ';
// is nested in double (single x2) quotes to correct issue from above otherwise above shows 
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';

// the \(ESCAPE) allows to add an apostrophy to the text. Not need in double quotes
// puncutation challenges, you MUST nest the variable with '.$variableNames.'  

echo '<br>';
echo "Here are the names with a DOUBLE quote! $first_name$last_name";
echo '<br>';

// Concatinations
$name = 'Kelly ';
$name .= 'Jean';
echo $name;
// only displays Jean unless(.) after variable $name
echo '<br>';

$x = 20;
$x *=2;
echo $x;
echo '<br>';
$x = 20;
$x /=2;
// using concatination join the 2 vars for opertion
echo $x;
echo '<br>';
$x = 120;
$x *=.09;
echo $x;
echo '<br>';


// our "first" functionn with number_format()
// echo '<br>';
// $x = 137;
// $x /= 4;
// 137/4=34.25
// // using concatination join the 2 vars for opertion
// // this gives 2 decimals, want 1
// //  use this to create a new var on the left side friendly format
// $friendly_x = number_format($x, 1);
// // x is the first argurment and the next is the # of deciemal places
// echo $friendly_x;
// using concatination join the 2 vars for opertion

// FOR NO DECIMAL place add ZERO 137/4=34.25
$x = 137;
$x /= 4;
$friendly_x = number_format($x, 0);
echo $friendly_x;
echo '<br>';

// Our "second" function the Day function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';

// array (indexed)
// CANNOT ECHO an array but can echo an index array
$fruit []='orange';
$fruit []='banana';
$fruit []='grapes';
$fruit []='apples';
$fruit []='cherries';

// or can type this way: (indexed)
$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
);
echo '<br>';

// indexed array options for fruit in position
// CANNOT ECHO an array but can echo an index array
echo $fruit[3];
// echoing 3rd fruit apples STARTS at ZEROS 
echo '<br>';
// OR.....
$fruits = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];

// // CANNOT ECHO an array but can echo an index array

// NO
// echo $fruit;
// echo '<br>';

// but can
print_r($fruit);
echo '<br>';
// or can also(shows different info options of info see code renderd)
var_dump($fruit);

echo '<br>';

// another array in world of websites

$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';

// echos HOME
echo $nav[0];
echo '<br>';


// assocaitive array
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

// (key, realationship)
// index is is the keey of the array
// home is the value of the array
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '<pre>';

echo '<br>';


$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'May Favorite Series during 2020 was "'.$show.'" starring, '.$show_actor.', and it is a '.$show_genre.' ';
