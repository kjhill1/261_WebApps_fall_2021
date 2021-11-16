<?php 

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
// $name ........................$image
            // IS
// $key ........................$value
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Picture</title>

<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<table>


<?php foreach($people as $name => $image) :
    // doing here to avoid the braces
    ?>

<tr>

<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>">
<!-- alt is name -->
</td>
<td><?php echo str_replace('_', ' ', $name) ;?></td>

<td><?php echo substr($image, 6, 35);?></td>

</tr>
<?php endforeach ; ?>

</table>


</body>
</html>