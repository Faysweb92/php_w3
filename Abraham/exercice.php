<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$chaine = "La maison bleue";
$sousChaine=substr($chaine,10,5);
echo $sousChaine."<br>";

$avis = "Ce film était vraiment mauvais.";
$nouvelAvis = str_replace ("mauvais","bon",$avis);
echo $nouvelAvis."<br>";

$texte = "bienvenue sur notre site web.";
$premiereMaj = ucfirst ($texte);
echo $premiereMaj."<br>";

$nomProduit = "Ordinateur portable";
$prixUnitaire = 899.99;
$quantite = 3;
echo $prixUnitaire*$quantite."<br>";



$article1 = "Livre";
$prixArticle1 = 12.99;
$quantiteArticle1 = 2;
 
$article2 = "DVD";
$prixArticle2 = 9.99;
$quantiteArticle2 = 3;
 
$article3 = "Casque audio";
$prixArticle3 = 49.99;
$quantiteArticle3 = 1;

$prixTotal=$prixArticle1*$quantiteArticle1+$prixArticle2*$quantiteArticle2+$prixArticle3*$quantiteArticle3;
echo $prixTotal."<br>";


$reduc=$prixTotal*0.9;
echo $reduc. "<br>";

$montantEuros = 100;
$tauxChange = 1.18;

 
$conver=$montantEuros*$tauxChange;
echo $conver."<br>";


$age = 18;

if($age>=18){
echo "majeur <br>";
}
else{
echo "mineur <br>";

};

# EXERCICE:
#soit la variable nombre
#ecrire un programme qui permet de tester si elle est paire ou impaire
#si elle est paire afficher => le nombre est paire
#si non afficher => le npombre est impaire

$nombre1=2;


if($nombre1%2==0){
echo "paire <br>";
}
else{
echo "impaire <br>";

};








# EXERCICE:
// une annee bissextile est une annee divisible par 4 et pas par 100 ou divisible par 400
// ecrire un programme qui permet de verifier si une annee est bisextile ou pas
// si elle l'est affiche annee bissextile
// si non affiche annee pas bissextile

$annee=2024;

if(($annee%4==0 and $annee%100!==0) or $annee%400==0){
echo "annee bissextile";
}
else{
echo "annee pas bissextile";

};

    ?>
    
</body>
</html>