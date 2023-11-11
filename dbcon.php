<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","crud-operations");

    $connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$connection)
    {
        die("connection failed");
    }
    else{
       echo  "successfull";
    }
    ?>
    