<?php
    require_once '/Applications/AMPPS/www/pagingJSON/vendor/autoload.php';

    $faker = Faker\Factory::create();
    
    $myObj = array();
    for ($i = 0; $i < 50; $i++) {
        $myObj[] = ['id'=>$faker->unique()->numberBetween(1,1000), 'name'=>$faker->name, 'email'=>$faker->email];         
    };

    $myJSON = json_encode($myObj);

    //połączenie z bazą danych
    $host = 'localhost';
    $user = 'root';
    $pass = 'mysql';
    $db = 'lista';
    $conn = @mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die ("bląd połączenia" .mysqli_connect_error());
    }
    
    
    //mysqli_close ($ conn);
    echo($myJSON);
?>