<?php
$location = "localhost";
$user = "root";
$password = "";
$dbn = "hw";


$con = mysqli_connect($location, $user, $password, $dbn) or die("not con");

if (!$con) {
    echo "not con";
}
