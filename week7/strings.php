<?php

$statement = 'Presently, I am reading nothing';

echo substr($statement, 0);
echo '<br>';
echo ($statement);
echo '<br>';
echo substr($statement, 0, 4);
echo '<br>';
echo substr($statement, 0, 14);
echo '<br>';
echo substr($statement, -7);
echo '<br>';
echo substr($statement, -15, 5);
echo '<br>';

// the other function will be string replace 

$statement2 = 'Hulu\'s of the Moving Tower is based on the Book, Looming Tower';

echo str_replace('the', 'The',  $statement2);

?>