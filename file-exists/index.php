<?php 

    /*
    
        Note:
        - file_exists does NOT just check files
        - It can also be used to check for directories

    */


    # Check if directory exists
    $directoryName = "data";

    if (file_exists($directoryName)) {
        echo "The directory '" . $directoryName . "' exists.";
    } else {
        echo "The directory '" . $directoryName . "' DOES NOT exists.";
    }

    echo "<br><br>";

    # Check if file exists
    $fileName = "users.csv";

    if (file_exists($fileName)) {
        echo "The file '" . $fileName . "' exists.";
    } else {
        echo "The file '" . $fileName . "' DOES NOT exists.";
    }

?>