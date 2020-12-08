<?php
    $table = 'users';
    $primaryKey = 'id';
    
    $columns = array(
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'name',  'dt' => 1 ),
        array( 'db' => 'email',   'dt' => 2 ),
    );
    
    $sql_details = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'mysql',
    'db' => 'lista',
    );

    require('ssp.class.php');
 
    echo json_encode(
        SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
    );
?>