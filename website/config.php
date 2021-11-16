<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// this is saying (from the header) that the page is going to be "the page we are on"

// creating array for nav

// **********NAV*********
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
// $nav['thx.php'] = 'Thanks';
$nav['gallery.php'] = 'Gallery';
$nav['../index.php'] = 'Back to Portal Page';

$logoDaily ='images/music.png';
$logo = 'images/phplogo.png';


// create a function for navigation
// function is called out on our header.p pages

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {

    if(THIS_PAGE == $key){
    $my_return .= '<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';
    } else {
        $my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>';

            }
            // end else
        }
        // end for each
        return $my_return;
    }
    // end function

    

switch (THIS_PAGE) {
    case 'index.php';
    $title = 'Home Page of Our IT261 Website';
    $body = 'home';
    $headline = 'Welcome Home!';
    break;
}

switch (THIS_PAGE) {
    case 'about.php';
    $title = 'About Page of Our IT261 Website';
    $body = 'about inner';
    $headline = 'Welcome to my About Page';
    break;
}

switch (THIS_PAGE) {
    case 'daily.php';
    $title = 'Daily Page of Our IT261 Website';
    $body = 'home';
    $headline = 'Welcome to  my Daily Page - Switch Homework will display!';
    break;
}

switch (THIS_PAGE) {
    case 'project.php';
    $title = 'Project Page of Our IT261 Website';
    $body = 'project inner';
    $headline = 'Welcome to my Project Page!';
    break;
}

switch (THIS_PAGE) {
    case 'gallery.php';
    $title = 'Gallery Page of Our IT261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to my Gallery Page!';
    break;
}

switch (THIS_PAGE) {
    case 'contact.php';
    $title = 'Contact Page of Our IT261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to my Contact Page!';
    break;
}

switch (THIS_PAGE) {
    case 'thx.php';
    $title = 'Thank You!';
    $body = '';
    $headline = 'Thank you for Your Feedback';
    break;
}

switch (THIS_PAGE) {
    case '../index.php';
    $title = 'Back to Portal Page';
    // $body = 'Portal';
    // $headline = 'Welcome to my Contact Page!';
    break;
}


// ************NAV END***************


// ********** BEGINNING of the SWITCH FOR HOMEWORK *************
// want certain headers to change bases on the day use this 
if(isset($_GET['today'])) {
$today = $_GET['today'];
// var is assign $_GET
    } else {
    $today = date ('l');
    }


// switch

switch ($today) {
    case 'Monday':
        $band = '<h3>Today is about the Smashing Pumpkins</h3>';
        $pic = 'pumpkins.jpg';
        $alt = 'The Smashing Pumpkins';
        $class = 'mon';
        $content = 'The<b><a href="https://en.wikipedia.org/wiki/The_Smashing_Pumpkins"> Smashing Pumpkins</a></b> are an American alternative rock band from Chicago. Formed in 1988 by frontman Billy Corgan, D\'arcy Wretzky, James Iha, and Jimmy Chamberlin, the band has undergone many line-up changes. The current lineup features Corgan, Chamberlin, Iha and guitarist Jeff Schroeder.<br>
        <b>Genre: </b> Alternative/Indie';
        break;
    }

switch ($today) {
        case 'Tuesday':
        $band = '<h3>Today is Yeah Yeah Yeahs Day</h3>';
        $pic = 'yeahyeahyeahs.jpg';
        $alt = 'Yeah Yeah Yeahs';
        $class = 'tues';
        $content = 'The <b><a href="https://en.wikipedia.org/wiki/Yeah_Yeah_Yeahs">Yeah Yeah Yeahs</a></b> are an American indie rock band formed in New York City in 2000. The group is composed of vocalist and pianist Karen O, guitarist and keyboardist Nick Zinner, and drummer Brian Chase.<br>
        <b>Genres: </b> Rock, Alternative/Indie';
        break;
    }

    switch ($today) {
        case 'Wednesday':
            $band = '<h3>Today is Glass Animals Day</h3>';
            $pic = 'glass_animals.png';
            $alt = 'Glass Animals';
            $class = 'wed';
            $content = '<b><a href="https://en.wikipedia.org/wiki/Glass_Animals">Glass Animals</a></b> are a British indie rock band formed in Oxford in 2010. Led by singer, songwriter, and producer Dave Bayley, the  group also features his childhood friends Joe Seaward, Ed Irwin-Singer and Drew MacFarlane. Bayley wrote and produced all three Glass Animals albums.<br>
            <b>Genre: </b>Alternative/Indie';
            break;
        }

    switch ($today) {
        case 'Thursday':
            $band = '<h3>Today 50 Cent DAY!</h3>';
            $pic = '50_cent.png';
            $alt = '50 Cent';
            $class = 'thurs';
            $content = 'Curtis James Jackson III, known professionally as <b><a href="https://en.wikipedia.org/wiki/50_Cent">50 Cent </a></b>, is an American rapper, actor, television producer, and businessman. Known for his impact in the hip hop industry, he has been described as a "master of the nuanced art of lyrical brevity."<br>
            <b>Genre: </b>Hip Hop';
            break;
        }

    switch ($today) {
        case 'Friday':
            $band = '<h3>Today is Feist Day</h3>';
            $pic = 'feist.png';
            $alt = 'Feist';
            $class = 'fri';
            $content = '<a href="https://en.wikipedia.org/wiki/Feist_(singer)"><b>Leslie Feist</b></a>, known mononymously as Feist, is a Canadian indie pop singer-songwriter and guitarist, performing both as a solo artist and as a member of the indie rock group Broken Social Scene. Feist launched her solo music career in 1999 with the release of Monarch.<br>
            <b>Genre:</b> Indie rock, Folk music, Indie pop, Pop rock, Indie folk, Baroque pop, Anti-folk, Dance/Electronic, Pop, Urban Folk';
            break;
        }

        // emailable form php



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


function random_pics($photos) {
$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].'"width="900" height="300">';

}

    $first_name = '';
    $last_name = '';
    $email = '';
    $phone = '';
    $interest = '';
    $comments = '';
    $business = '';
    $privacy = '';
    $phone = '';

    $first_name_Err = "";
    $last_name_Err = "";
    $email_Err = '';
    $phone_Err = '';
    $interest_Err = '';
    $business_Err = '';
    $comments_Err = "";
    $privacy_Err = "";
    

    if($_SERVER ['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your first name';

    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_Err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        }
        }


    if(empty($_POST['interest'])) {
        $interest_Err = 'Please Let Me Know Your Interest';
    } else {
        $interest = $_POST['interest'];
    }

    if($_POST['business'] == NULL) {
        $business_Err = 'Please tell me what type of business you have?';
    } else {
        $business = $_POST['business'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_Err = 'Please select.';
    } else {
        $privacy = $_POST['privacy'];
    }


if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['interest'],
        $_POST['business'],
        $_POST['comments'],
        $_POST['privacy']
        
        ))

    {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test Email,' .date('m/d/y');
        $body = '
        The First Name is: '.$first_name.' '.PHP_EOL.'
        The Last Name is: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.' 
        Phone: '.$phone.' '.PHP_EOL.'
        Type of Business: '.$business.' '.PHP_EOL.'

        Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(

            'From' => 'noreply@mystudentswa.com',
            'Reply-to' => ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
      
    }

}
// end server Request


?>

