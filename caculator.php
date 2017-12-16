<html>
    <meta charset="UTF-8">
    <head>
<title>caculator</title>
    </head>
<body>
    <form action="#" method="POST">
    Entrer le premier nombre:<input type="text" nom="nombre1"required/><br></br>
    Entrer le second nombre:<input type="text" nom= "nombre2"required/><br></br>
    </select> <br></br>
    <select name="dopdawn">
    <label> opérateur: </label>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
        <input type="submit" value="calculer"/>
    </select>
</form>
<?php
  get_required_files("saission.php");
  extract($_POST);
  if(isset($password) && !empty($password))
  {
    if($password=="admin" && $login=="Admin")
    {
        echo "vous ete conneter en tant que admin";
    }
    elseif($password=="user" && $login=="User")
    {
      $_SESSION["$login"]=$login
      header(location:caculator.php);
        echo "vous ete conneter en tant que User";
      

    }else{
    header("location:saission.php?erreur=1");
    }
  }
  else{
    header("location:saission.php?erreur=2");
    
  }
 ?>
<?ph
if(isset($_Post["calculator"]))
{
    extract($_Post);
if ($opérateur=="+") {
    echo"nombre1+nombre2=";
    ($nombre1+$nombre2);
}
elseif ($opérateur=="-") {
    echo "$nombre1-$nombre2";
    ($nombre1-$nombre2);
}
elseif ($opérateur=="*") {
    echo "$nombre1*$nombre2";
    (nombre1*nombre2);
}
elseif (opérateur=="/") {
    if (nombre2!=0) {echo "$nombre1/$nombre2";
    ($nombre1/$nombre2);
    }
    els{echo "impossible";}
}
elseif ($opérateur=="%")
 {
    if (nombre2!=0) {
       echo "impossible";
         }
    els{
    echo"$nombre1%$nombre2";
    ($nombre1%$nombre2);
    }

}
?php>
</body>
</html>