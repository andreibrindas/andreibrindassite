<?php

    $link = (mysqli_connect("shareddb1d.hosting.stackcp.net", "users-db-3231f3ee", "eMfXmEqTZx3P", "users-db-3231f3ee"));
    
    if (mysqli_error($link)) {
        
        die ("Database connection error");
        
    }

?>