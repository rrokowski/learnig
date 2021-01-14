
<?php
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
       
        $url = "http://api.coindesk.com/v1/bpi/historical/close.json?start=".$startDate."&end=".$endDate;
    //    $url1 = "http://api.coindesk.com/v1/bpi/currentprice.json";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        print_r($data);
        
        $file = file_put_contents("data1.json", $json);

        die();
        
        
    
?>