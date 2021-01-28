<?php
       $startDate = $_POST['startDate'];
       $endDate = $_POST['endDate'];
      
       $url = "http://api.coindesk.com/v1/bpi/historical/close.json?start=".$startDate."&end=".$endDate;
       
       require 'vendor/autoload.php';
       $client = new GuzzleHttp\Client();
       $response = $client->request('GET', $url);
       
       echo $response->getBody();
       die();
       
?>