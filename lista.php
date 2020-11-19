<?php
    require_once 'vendor/autoload.php';

    $faker = Faker\Factory::create();
    
    $myObj = array();
    for ($i = 0; $i < 50; $i++) {
        $myObj[] = ['id'=>$faker->unique()->numberBetween(1,1000), 'name'=>$faker->name, 'email'=>$faker->email];         
    };

    $myJSON = json_encode($myObj);
    echo($myJSON);
    die();
?>