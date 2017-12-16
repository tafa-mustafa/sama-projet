<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <form action="#" method="post"  >
        <fieldset style="color:red"  ><legend>VEUILLEZ VOUS INSCRIRE</legend> 
<label for="">Login:</label> <input type="text" name="log" required><br>

<label for=""> profil:</label> <select name="pro" placeholder="" required >
<option value="admin">admin</option>
<option value="user">user</option>


</select><br><br>
<input type="submit" value="creer" name="creer" >
<input type="reset" value="supprimer" ><br><br>
</fieldset>


    </form>
    <?php
    if (isset($_POST['creer']) && isset($_POST['pro']) && isset($_POST['log'])){
    extract($_POST);
 // Génération d'une chaine aléatoire
 function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
 {
     $nb_lettres = strlen($chaine) - 1;
     $generation = '';
     for($i=0; $i < $nb_car; $i++)
     {
         $pos = mt_rand(0, $nb_lettres);
         $car = $chaine[$pos];
         $generation .= $car;
     }
     return $generation;
 }
 

 
 $users = fopen ("new2.txt", "a+");
 // Instruction 2
 $pro=$pro."\r\n";
 fputs ($users, $log.' '.chaine_aleatoire(8).' '.$pro );
fclose ( $users );


}


    ?>
</body>
</html>