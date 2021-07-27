<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "weareteam@2020";
$dBName = "loginsystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}