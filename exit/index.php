<?php 

    $foo = false;

    if ($foo === false) {

        echo "Inside if statement..";

        exit();

    }

    echo "<br>";

    echo "Will this print?"; // => Nope!

?>