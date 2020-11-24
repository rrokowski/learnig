<?php
    require_once '/Applications/AMPPS/www/pagingJSON/vendor/autoload.php';

    $faker = Faker\Factory::create();
    
    $myObj = array();
    for ($i = 0; $i < 50; $i++) {
        $myObj[] = ['id'=>$faker->unique()->numberBetween(1,1000), 'name'=>$faker->name, 'email'=>$faker->email];         
    };
    print_r($myObj);
    //$myJSON = json_encode($myObj);

    //echo($myJSON);
    
    //połączenie z mysql
    $host = 'localhost';
    $user = 'root';
    $pass = 'mysql';
    $db = 'lista';
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die ("bląd połączenia" .mysqli_connect_error());
    }

    //czyszczenie tabeli users
    $removeTable = "DELETE FROM users";
    mysqli_query($conn, $removeTable);

    //wgrywanie danych do tabeli users

    if (is_array($myObj)) {
        foreach ($myObj as $row => $value) {
        $id = mysqli_real_escape_string($conn, $value["id"]);
        $name = mysqli_real_escape_string($conn, $value["name"]);
        $email = mysqli_real_escape_string($conn, $value["email"]);
        
        $sql= "INSERT INTO users(id, names, email) VALUES ('$id', '$name', '$email')";
        mysqli_query($conn, $sql);    
        }   
    }
    
    mysqli_close ($conn);
?>