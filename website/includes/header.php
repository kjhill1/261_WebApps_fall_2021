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
$nav['gallery.php'] = 'Gallery';
$nav['../index.php'] = 'Back to Portal Page';

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
        $content = 'The <b><a href="https://en.wikipedia.org/wiki/The_Smashing_Pumpkins">Smashing Pumpkins </a></b>are an American alternative rock band from Chicago. Formed in 1988 by frontman Billy Corgan, D\'arcy Wretzky, James Iha, and Jimmy Chamberlin, the band has undergone many line-up changes. The current lineup features Corgan, Chamberlin, Iha and guitarist Jeff Schroeder.</p>
        <p><b>Genre: </b> Alternative/Indie</p>';
        break;
    }

switch ($today) {
        case 'Tuesday':
        $band = '<h3>Today is Yeah Yeah Yeahs Day</h3>';
        $pic = 'yeahyeahyeahs.jpg';
        $alt = 'Yeah Yeah Yeahs';
        $content = 'The <b><a href="https://en.wikipedia.org/wiki/Yeah_Yeah_Yeahs">Yeah Yeah Yeahs</a></b> are an American indie rock band formed in New York City in 2000. The group is composed of vocalist and pianist Karen O, guitarist and keyboardist Nick Zinner, and drummer Brian Chase. <p><b>Genres: </b> Rock, Alternative/Indie</p>';
        break;
    }

    switch ($today) {
        case 'Wednesday':
            $band = '<h3>Today is Glass Animals Day</h3>';
            $pic = 'glass_animals.png';
            $alt = 'Glass Animals';
            $content = '<b><a href="https://en.wikipedia.org/wiki/Glass_Animals">Glass Animals</a></b> are a British indie rock band formed in Oxford in 2010. Led by singer, songwriter, and producer Dave Bayley, the  group also features his childhood friends Joe Seaward, Ed Irwin-Singer and Drew MacFarlane. Bayley wrote and produced all three Glass Animals albums</p>
            <p><b>Genre: </b>Alternative/Indie</p>';
            break;
        }

    switch ($today) {
        case 'Thursday':
            $band = '<h3>Today 50 Cent DAY!</h3>';
            $pic = '50_cent.png';
            $alt = '50 Cent';
            $content = '<p>Curtis James Jackson III, known professionally as <b><a href="https://en.wikipedia.org/wiki/50_Cent">50 Cent</a></b>, is an American rapper, actor, television producer, and businessman. Known for his impact in the hip hop industry, he has been described as a "master of the nuanced art of lyrical brevity."</p>
            <p><b>Genre: </b>Hip Hop</p>';
            break;
        }

    switch ($today) {
        case 'Friday':
            $band = '<h3>Today is Feist Day</h3>';
            $pic = 'feist.png';
            $alt = 'Feist';
            $content = '<p><a href="https://en.wikipedia.org/wiki/50_Cent"><b>Leslie Feist</b></a>, known mononymously as Feist, is a Canadian indie pop singer-songwriter and guitarist, performing both as a solo artist and as a member of the indie rock group Broken Social Scene. Feist launched her solo music career in 1999 with the release of Monarch.</p>
            <p>Genre: Indie rock, Folk music, Indie pop, Pop rock, Indie folk, Baroque pop, Anti-folk, Dance/Electronic, Pop, Urban Folk</p>';
            break;
        }
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<link href="css/styles.css" type="text/css" rel="stylesheet">

<title><?php echo $title; ?></title>

</head>


<body class="<?php echo $body?>">


<header>
    <div class="header-inner">
        <a href="index.html">
        <img id="logo" src="images/music.png" alt="logo"></a>

    <nav>
        <!-- <ul>
            <li><a href="#">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="daily.php">Daily</a></li>
            <li><a href="">People</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="../index.php">Back to Portal Page</a></li>

        </ul> -->

        <ul>
        <?php
        foreach($nav as $key => $value) {

            if(THIS_PAGE == $key){
                echo '<li><a class="current" href="'.$key.' ">'.$value.'</a></li>';
            } else {
                echo '<li><a href="'.$key.'">'.$value.' </a></li>';

            }
        }
    

        ?>
        </ul>
   
    </nav>
    </div> <!-- closes header-inner -->
    
 

    
</header>