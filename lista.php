<?php
    //połączenie z mysql
    $host = 'localhost';
    $user = 'root';
    $pass = 'mysql';
    $db = 'lista';
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die ("bląd połączenia" .mysqli_connect_error());
    }

    //pobranie danych z tabeli users
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
    while ($data = mysqli_fetch_row($result)) {
        print_r($data);
    };
    
?>