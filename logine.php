<?php
extract($_POST);
 
 echo ' BIENVENUE Mr' . $nom.'<br>','<br>';
 if(is_numeric($age)){
    if($age<=0){
        echo 'l age ne doit pas etre negatif!!!';}
    else if($age<=100){
     
    echo 'Vous avez' .$age. 'ans'.'<br>';}
     
     else if($age>100){
        echo 'l age ne doit pas dépasser 100!!:'.'<br>';
    }
    
     
    if($age<=18){
    
       $mineur=1;
       echo 'vous etes mineur!!!'.'<br>';
       }
   else
       $mineur=0;{
       echo "vous ete majeur!!!";
       }
 
 }else{
     echo("Saisir un bon nombre svp!!!");
 }

 
?>
