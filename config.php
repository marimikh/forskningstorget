<?php

$server="localhost";
$user="root";
$database="forskning";
$password="";

$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Can't connect to DB" . mysqli_error($db));
} ?>
