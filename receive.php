<?php

 
$jsonString = $_POST["key"];//file_get_contents("php://input");
 $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile,$jsonString );
// $filename = "newfile.txt";
// $fp = fopen($filename, "r");

//$content = fread($fp, filesize($filename));
//$content_stdclassobj=json_decode($content);
$content_stdclassobj=json_decode($jsonString);
$content_stdarray=(array) $content_stdclassobj;
$finalarray=array();
foreach($content_stdarray as $key=>$value){
	$temparray=array();
	array_push($temparray, $key);
	array_push($temparray, $value);
	array_push($finalarray, $temparray);
}

//echo "<pre>";print_r($finalarray);echo "</pre>";
$csvFileName = 'example_new.csv';
 
$fp = fopen($csvFileName, 'w');
 
foreach($finalarray as $row){
	//print_r($row);
   fputcsv($fp, $row);
}
 
fclose($fp);
fclose($myfile);

echo "success";






?>