<?php

$server="localhost";
$uid="root";
$pass="";
$database="dbwebsite";

$mysql = new mysqli($server,$uid,$pass,$database) or die ("database gagal");

?>