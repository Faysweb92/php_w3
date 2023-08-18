<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php $nom = "Heng"; -->
   $prenom = "Mic";
   $nomComplet = $prenom. " " . $nom;
   echo "<p> Bonjour Je suis " .$nomComplet."</p>";

   $phrase = "la programmation est amusante";
   $mot = substr($phrase, 3, 13);
   echo $mot. "<br>" ;

   $texte = "Les chats sont adorables";
   $nouveauTexte = str_replace("chats", "chiens", $texte);
   echo $nouveauTexte."<br>";

   $texte = "hello world";
   $minuscules = strtolower($texte);
   echo $minuscules. "<br>";
   $premiereMaj = ucfirst($texte);
   echo $premiereMaj. "<br>"; 

   $mavar = null;
   if(isset($mavar)){
echo -->

   }

   
   ?>
</body>
</html>