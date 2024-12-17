<?php  
$getal = rand(1,6);

echo "je hebt het volgende: $getal gegooid ";


if($getal < 4) {
echo "je hebt verloren"; 

}
elseif ($getal == 6){
    echo " special prijs ";
}  else { 
    echo "je hebt gewonnen"; 
}
    

?>


