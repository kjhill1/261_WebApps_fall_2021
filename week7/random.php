<?php
// random functions that return random numbers

$dice = rand(1, 6);
echo $dice;
echo '<br>'; 
// displays random numbers between 1-6 each time refresh

$dice1 = rand(1, 6);

$dice2 = rand(1, 6);
 echo $dice1;
 echo '<br>'; 

 echo $dice2;
 echo '<br>'; 

// throwing dice and get a double will win

if($dice1 == $dice2){
    echo 'I won';
}else{ 
    echo 'Did not win - Boo!';
    }

//  random function to display images different image when each time I go to page


// i is a # 
$i=rand(1,20);
echo $i;

// images we will display randomly photos are an array

$photos = array(

    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5',
);

$photo[0] = 'photo1';
$photo[1] = 'photo2';
$photo[2] = 'photo3';
$photo[3] = 'photo4';
$photo[4] = 'photo5';

// we want to display photos randomly $i= photo 1-5, 0 = photo number 1

$i = rand(0, 4);
// when count image then ny using "i" translates $photo1, 3, 4 etc 
$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].'">';

?>

