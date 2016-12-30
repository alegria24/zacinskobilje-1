<?php
session_start();
$xml = simplexml_load_file('proizvodi.xml');

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
	$counter = 0;
    foreach($xml->children() as $value) {
		if ($counter == 10) break;
        if (stristr($q, substr($value->Name, 0, $len))) {
			$counter = $counter + 1;
            if ($hint === "") {
                $hint = "$value->Name ($value->Cuisine)";
            } else {
                $hint .= ", $value->Name ($value->Cuisine)";
            }
        }
		elseif (stristr($q, substr($value->Cuisine, 0, $len))) {
			$counter = $counter + 1;
            if ($hint === "") {
                $hint = "$value->Name ($value->Cuisine)";
            } else {
                $hint .= ", $value->Name ($value->Cuisine)";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>