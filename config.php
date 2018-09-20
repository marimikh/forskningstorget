<?php

$server="student.cs.hioa.no";
$user="s315699";
$database="s315699";
$password="";

$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Can't connect to DB" . mysqli_error($db));
} ?>