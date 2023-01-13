<?php

    $hostname = "localhost";
    $username = "root";
    $pwd = "";
    $db = "aptech";

    $con = new mysqli($hostname,$username,$pwd,$db);

    if(!$con)
    {
        echo "Not connected";
    }

?>