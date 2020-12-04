<?php
//połączenie z mysql
$host = 'localhost';
$user = 'root';
$pass = 'mysql';
$db = 'lista';
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die ("bląd połączenia" . mysqli_connect_error());
}

//pobranie danych z tabeli users
$sql = mysqli_query($conn, "SELECT * FROM users");
$myObj = array();

while ($rowUser = mysqli_fetch_assoc($sql)) {
    $myObj[] = $rowUser;
}
//print_r($myObj);

//zapisanie danych jako json
die(json_encode($myObj));
