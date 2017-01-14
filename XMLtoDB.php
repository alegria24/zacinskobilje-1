<?php
	session_start();
	$xml=simplexml_load_file("proizvodi.xml") or die("Error: Cannot create object");

	$veza = new PDO("mysql:dbname=zacinskobiljecompany;host=localhost", "admin", "adminpass");
	$veza->exec("set names utf8");
		 
	foreach($xml->Spice as $zacinXML){
		$result = $veza->query("select zbName, zbCuisine, zbFlavor, zbUse, zbPrice from zacinskobilje");
		
		$check = false;
		if (!$result) {
			 $error = $veza->errorInfo();
			 print "SQL greška: " . $greska[2];
			 exit();
		}
		
		foreach($result as $zacin) {
			alert($zacin["zbName"]);
			if($zacin["zbName"]==$zacinXML->Name){
				$check = true;
			}
		}
		
		if($check == false){
			
			$sql = "INSERT INTO zacinskobilje (zbID, zbName, zbCuisine, zbFlavor, zbUse, zbPrice)
					VALUES ('NULL', '".$zacinXML->Name."', '".$zacinXML->Cuisine."', '".$zacinXML->Flavor."', '".$zacinXML->Use."', '".$zacinXML->Price."'";

			$veza->query($sql);
		}
	}
?>