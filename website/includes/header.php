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
        <a href="index.php">
             <img id="logo" src="images/music.png" alt="logo"></a>
        <!-- <img id="logo" src="hp if($_GET['nav'] = 'Daily' ? echo $logoDaily : echo $logo ; ?> )" alt="logo"></a> -->

        <!-- tujerary operatir use in place of if else statement
        if this is true waht happens after ? true use  Daily
    colon is an "ifelse statement-->

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
    echo my_nav($nav);

// MOVED TO CONFIG FILE because echo my nav here
    //  foreach($nav as $key => $value) {

        // if(THIS_PAGE == $key){
        // echo '<li><a class="current" href="'.$key.' ">'.$value.'</a></li>';
        // //  } else {
        //  echo '<li><a href="'.$key.'">'.$value.' </a></li>';

        // }
        // }
    ?>
        </ul>
   
    </nav> 
    </div> <!-- closes header-inner -->
    
 

    
</header>