<?php 
    $string = "The quick brown fox jumps over the lazy dog";
    $retarr = explode(' ', $string);

    echo 'This is a code snipped that breaks the sentence "The quick brown fox jumps over the lazy dog" into separate words.<br /><br />'; 
    var_dump($retarr);
    echo '<br /><br />...and it works!';
?>
