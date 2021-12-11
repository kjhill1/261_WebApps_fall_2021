<?php
include('config.php');
include('includes/header.php');


$people['Bonnie_Wolf'] = 'bonni_Great Friend at the The Great Junk Hunt.';
$people['Welcome_homes'] = 'homes_Going Home.';
$people['New_river'] = 'river_Hiking The New River Gorge.';
$people['Brother_Cordel'] = 'corde_My Silly Brother.';
$people['Kitty_Meaws'] = 'meaws_Good Kitty. My best Friend in Quarantine.';

// $name ........................$image
            // IS
// $key ........................$value
?>

<div id="wrapper">
    <main class="row">
        <h1><?php echo $headline;?></h1><br>

<table>

<?php foreach($people as $name => $image) :
    // doing here to avoid the braces
    ?>

<tr>

<td><img src="images/<?php echo substr($image, 0, 5);?>.png" alt="<?php echo str_replace('_', ' ', $name) ;?>">
<!-- alt is name -->
</td>
<td><?php echo str_replace('_', ' ', $name) ;?></td>

<td><?php echo substr($image, 6, 60);?></td>

</tr>
<?php endforeach ; ?>

</table>

</main>
<?php
include('includes/footer.php'); ?>