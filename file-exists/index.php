<?php 

    /*
    
        Note:

        - This function does NOT just check files, 
        it can also be used to check for a directories exists

        - Results are cached!

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