<?php 
date_default_timezone_set("Europe/Amsterdam"); 

$today = date(" j F Y"); 
echo "vandaag is het: $today";

echo "<br>"; 


$today = date(" z"); 
echo "vandaag is het: $today";   

echo"<br>";

$today = date(" l"); 
echo " $today is de dag van de week";    

echo"<br>";
$today = date("t"); 
echo "de maand december heeft in totaal $today dagen";  



