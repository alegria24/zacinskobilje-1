<?php
    
    if (file_exists('proizvodi.xml'))  
    {
        $xml = simplexml_load_file('proizvodi.xml'); 
        $x = 1;
        $v = [];
        $header = array('Spice', 'Cuisine', 'Flavor', 'Usage', 'Price');
        $csvFile = fopen('proizvodi.csv', 'w');
        fputcsv($csvFile, $header);      
        fclose($csvFile);
        $result = $xml->xpath('//Spice'); 
        foreach ($result as $r) 
        {           
            $child = $xml->xpath('//Spice['.$x .']/*');      
            foreach ($child as $value) {
                $v[] = $value;         
            }
            $csvFile = fopen('proizvodi.csv', 'a');
            fputcsv($csvFile, $v);      
            fclose($csvFile);  
            $v = []; 
            $x++; 
        }
        $contenttype = "application/force-download";
        header("Content-Type: " . $contenttype);
        header("Content-Disposition: attachment; filename=\"" . basename('proizvodi.csv') . "\";");
        readfile('proizvodi.csv');
        exit();
    }
?>