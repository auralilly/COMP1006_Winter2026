<?php
/* What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?
*/

$items = ["Home", "About", "Contact"];
include 'head.php';
?>



<h1>Welcome</h1>

<?php
include 'item.php';

?>

<?php

include 'footer.php';
?>

