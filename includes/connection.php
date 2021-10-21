<?php
// connect to DB
    $con = mysqli_connect("localhost","root","","mobifix");
    if(!$con){
        die("cannot connect to server");
    }
    ?>