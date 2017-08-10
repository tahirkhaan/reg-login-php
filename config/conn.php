<?php
session_start();
$serverName = "localhost";

$username = "root";
$password = "";
$db = "";
$port = "3306";


// $username = "id2489720_patient_cms";
// $password = "pass4rdb";
// $db = "id2489720_patient_cms";
// $port = "3306";

$conn = mysqli_connect($serverName, $username, $password, $db, $port);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}