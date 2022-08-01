<?php 

    // Pick a custom time zone
    $str_custom_time_zone = 'Europe/Copenhagen';
    
    // Create a new date-time object that stores 'now' in our custom time zone
    $obj_now = new DateTime('now', new DateTimeZone($str_custom_time_zone));	

    $str_next_available_date = "2000-07-31 23:27:00";
    
    $obj_next_available_date = new DateTime( $str_next_available_date, new DateTimeZone($str_custom_time_zone) );

    // If the start date object is in the future...
    if ( $obj_next_available_date < $obj_now ) {

        echo "obj_next_available_date is in the past";

    } else {

        echo "obj_next_available_date is in the future";

    };
    

?>