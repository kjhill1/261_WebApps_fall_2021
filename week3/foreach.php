<?php
// our foreach loop
 

$show = array(
    'Name' => 'Handmaid\'s Tales',
    'Actress' => 'E. Moss',
    'Genre' => 'Drama',
    'Author' => 'Margaret Atwood',
    'Year' => '1985'
    // remove commas in the last array
);

    $show['Name'] = 'Handmaid\'s Tale';
    // var....key.......value
    $show['Actor'] = 'E. Moss';
    $show['Genre'] = 'Drama';
    $show['Author'] = 'Margaret Atwood';
    $show['Year'] = '1985';


//     foreach($show as $key => $value) {
// // calling out var name "$show", $key (name,. actor, genre, author) and the $value (handmaids, E. Moss...etc)
//         echo '<b> '.$key.'</b>: '.$value.'<br>';

    // }
    
    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['project.php'] = 'Project';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

    // foreach($nav as $key => $value) {
    //         echo '<b> '.$key.'</b>: '.$value.'<br>';
    //         }

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<title>For Each Loop</title>
<style>

    .wrapper {
        width: 580px;
        margin: 20px auto;
    }

    nav a   {  
        color: red;
        font-weight: bold;
        text-decoration: none;
        font-size: 1.2em;
        font-family: Verdana, arial, san-serif;
    }

    nav li {
        list-style-type: none;
    }

    </style>
    </head>

<body>

    <div class="wrapper">
        <h1>Our Foreach Loops</h1>
        <h2>Handmaid's Tale</h2>
        <ul>
    
    <?php
        foreach($show as $key => $value) {
    // calling out var name "$show", $key (name,. actor, genre, author) and the $value (handmaids, E. Moss...etc)
            echo '<li><b> '.$key.'</b>: '.$value.'</li>';

        }
?>

</ul>

    <h2>Our Navigation</h2>

    <nav>

    <ul>
        <?php 
        foreach($nav as $key => $value) {
            echo '<li><a href="'.$key.'"> '.$value.' </a></li>';

            // home is value
            // key is pages (index.php, about.php etc) in href=""
            // value is home
            }
        ?>

    </ul>
        </nav>
        </div>
        <!-- end div wrapper -->

</body>
</html>