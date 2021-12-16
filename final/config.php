<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// this is saying (from the header) that the page is going to be "the page we are on"

// creating array for nav

// **********NAV*********
$nav['index.php'] = 'Home';
$nav['shop.php'] = 'Shop';
$nav['daily.php'] = 'Deal of the Day';
$nav['about.php'] = 'About';
$nav['shop.php'] = 'Shop';
$nav['contact.php'] = 'Contact';
$nav['login.php'] = 'Login Page';
$nav['register.php'] = 'Registration Page';

$logoDaily ='images/logo.svg';
$logo = 'images/logo.svg';


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
    $headline = 'Welcome Home';
    break;
}

switch (THIS_PAGE) {
    case 'about.php';
    $title = 'About Me';
    $body = 'about inner';
    $headline = 'Welcome to my About Page';
    break;
}

switch (THIS_PAGE) {
    case 'daily.php';
    $title = 'Daily Clean';
    $body = 'home';
    $headline = 'Recommendation du Jour';
    break;
}

switch (THIS_PAGE) {
    case 'shop.php';
    $title = 'Shop';
    $body = 'project inner';
    $headline = 'Get Clean';
    break;
}


switch (THIS_PAGE) {
    case 'contact.php';
    $title = 'Contact Me';
    $body = 'contact inner';
    $headline = 'Feedback is a Gift';
    break;
}

switch (THIS_PAGE) {
    case 'thx.php';
    $title = 'Request Sent';
    $body = '';
    $headline = 'Thank you for Your Feedback';
    break;
}

switch (THIS_PAGE) {
    case 'view.php';
    $title = 'Product Info';
    $body = '';
    break;
}

switch (THIS_PAGE) {
    case 'login.php';
    $title = 'Login Page';
    $body = '';
    // $headline = 'Thank you for Your Feedback';
    break;
}

switch (THIS_PAGE) {
    case 'register.php';
    $title = 'Registration Page';
    $body = '';
    // $headline = 'Thank you for Your Feedback';
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
        $soap = '<h3>For Winter Skin Care</h3>';
        $pic = 'soap_mon.jpg';
        $alt = 'Aloe & Shea Soap';
        $class = 'mon';
        $content = 'The Aloe and Shea Butter Bar is excellent for Winter Skin care.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
        break;
    }

switch ($today) {
        case 'Tuesday':
        $soap = '<h3>For Daily Used for Normal Skin</h3>';
        $pic = 'soap_tues.JPG';
        $alt = 'White Bar';
        $class = 'tues';
        $content = 'Plain White Bar is perfect for daily use, as it is simple, gentle and cleansing. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non providen';
        break;
    }

    switch ($today) {
        case 'Wednesday':
            $soap = '<h3>For Detox and Conditioning</h3>';
            $pic = 'soap_wed.JPG';
            $alt = 'Aloe & Green Clay';
            $class = 'wed';
            $content = 'The Aloe and Green Clay is both nuriting with the ALie and the clay pulls out imputies that accumlite throuigh out the day.  similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. ';
            break;
        }

    switch ($today) {
        case 'Thursday':
            $soap = '<h3>(Not So) Garden Variety</h3>';
            $pic = 'soap_thurs.JPG';
            $alt = 'Garden Variety';
            $class = 'thurs';
            $content = 'Containing an Variety of Botanical that can be grown in an urban garden this will add nutrients and minerals to your skin routine all in bar. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimu';
            break;
        }

    switch ($today) {
        case 'Friday':
            $soap = '<h3>Honey, Oatmeal, with Rose Hip Oil and Lavender</h3>';
            $pic = 'soap_fri.JPG';
            $alt = 'Oatmeal Bar';
            $class = 'fri';
            $content = 'This is the Soapmakers Favorite. Blended to protect and sooth sensitive skin before and after exposure to elements. omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis';
            break;
        }
        switch ($today) {
            case 'Saturday':
                $soap = '<h3>Enjoy this Saturday No matter what you are doing!</h3>';
                $pic = 'soap_sat.png';
                $alt = 'Enjoy this day';
                $class = 'sat';
                $content = 'But remember to wash your face!!';
                break;
            }

      switch ($today) {
        case 'Sunday':
            $soap = '<h3>Relax it is Sunday!</h3>';
            $pic = 'soap_sun.png';
            $alt = 'Face mask';
            $class = 'sun';
            $content = 'Do a nice mask and stay in those comfy clothes!';
            break;
        }


// images we will display randomly photos are an array

// $photos = array(

//     'photo1',
//     'photo2',
//     'photo3',
//     'photo4',
//     'photo5',
// );

// $photo[0] = 'photo1';
// $photo[1] = 'photo2';
// $photo[2] = 'photo3';
// $photo[3] = 'photo4';
// $photo[4] = 'photo5';

// // we want to display photos randomly $i= photo 1-5, 0 = photo number 1

    $first_name = '';
    $last_name = '';
    $email = '';
    $phone = '';
    $interest = '';
    $comments = '';
    $skin_type = '';

    $first_name_Err = "";
    $last_name_Err = "";
    $email_Err = '';
    $phone_Err = '';
    $interest_Err = '';
    $skin_type_Err = '';
    $comments_Err = "";
    

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

    if(empty($_POST['skin_type'])) {
        $skin_type_Err = 'What is your skin type?';
    } else {
        $skin_type = $_POST['skin_type'];
    }



if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['interest'],
        $_POST['skin_type'],
        $_POST['comments'],
        
))

// a semi colon delsted


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
// initialize/defining var
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'Success! You are now logged on';
$errors = array();

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}


?>
