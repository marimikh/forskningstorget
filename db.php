<?php

$server="localhost";
$user="root";
$database="FT_Quiz";
$password="root";

$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Can't connect to DB" . mysqli_error($db));
} ?>