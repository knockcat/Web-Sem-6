<?php

    date_default_timezone_set("Asia/Kolkata");
    setcookie('LastVisit', date("d/m/Y" . " " . "h-i-sa" . " " . "l"));

    if(isset($_COOKIE['LastVisit']))
    {
        $visit = $_COOKIE['LastVisit'];
        echo $visit;
    }
    else
    {
        echo "You Visit for the First Time <br>";
    }
?>