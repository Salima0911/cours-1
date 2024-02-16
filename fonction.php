<!-- exercice 7
creez un fichier fonction.php
// Fonction 1 : Concaténer deux chaînes de caractères avec un espace entre elles
// Fonction 2 : Remplacer les espaces par des tirets dans une chaîne
// Fonction 3 : Convertir une chaîne de caractères en majuscules
 // Fonction 4 : ajouter la date et l’heure a la fin d'un texte
// Fonction 5 : verifier si un compte utilisateur est valide dans un tableau a la cle autorized
$utilisateur = [
    'nom' => 'John Doe',
    'email' => 'johndoe@example.com',
    'authorized' => true
];
// Fonction 6 : verifier si un compte utilisateur est valide dans un tableau a la cle autorized et rajouter un commentaire dans le tableau
 -->
 <?php 





//   creer Fonction  : Concaténer deux chaînes de caractères avec un espace entre elles


function nomPrenom($element1,$element2){
    $nomPrenom ="les deux Soeur s'appellent   " . $element1 .'  ' .'et' .' ' . $element2; 
    echo $nomPrenom;
}
nomPrenom("Kawtar", "Ibtissem");
echo'<br>';
nomPrenom("Rayane ", "Samy");

echo '<br>';
echo '<br>';
//  2eme fonction 
function concatener($chaine1, $chaine2){
    $chaineConcatiner = $chaine1 . " " . $chaine2;
    echo $chaineConcatiner;
}
concatener("hello", "world");

concatener("je m'appelle", "Salima");
//  Fonction 2 : Remplacer les espaces par des tirets dans une chaîne
echo '<br>';
echo '<br>';
function nomPrenomModif($nomPrenomTrait){
    $nomPrenomModiftrait = str_replace(' ', '-', $nomPrenomTrait);
    echo $nomPrenomModiftrait;
}
nomPrenomModif(" je ne comprend pas  beaucoup");
echo '<br>';
echo '<br>';
nomPrenomModif( "j'ai oublier les fonction");


echo '<br>';
echo '<br>';
function espaceTiret($chaine){
    $phraseModif = str_replace(' ', '-', $chaine);
    echo $phraseModif;
}
espaceTiret("voici  une phrase modifier");


echo '<br>';
echo '<br>';

 // Fonction 3 : Convertir une chaîne de caractères en majuscules

        // 1 -  Création de fonction  qui va stocker le texte en majuscule
function majuscule($phrase){
    $phraseMajuscule = strtoupper($phrase);
    echo $phraseMajuscule;
}
// appeler la fonction en la transformant en majuscule 
majuscule("je crois que j'ai compris les fonctions ");

echo '<br>';
echo '<br>';
 
// Fonction 4 : ajouter la date et l’heure a la fin d'un texte
function ajouterDate($phrase){
    $phraseAvecDate = $phrase .   "-faite le ". date ('d/m/y') . 'a'. date ('H : i ');
    echo $phraseAvecDate;
}
echo '<br>';
ajouterDate(" Bonjour je m'appelle Kawtar");

echo '<br>';
echo '<br>';

// Fonction 5 : verifier si un compte utilisateur est valide dans un tableau a la cle autorized


$utilisateur = [
    'nom' => 'John Doe',
    'email' => 'johndoe@example.com',
    'authorized' => true
];

function verifierCompte($user)
{
    if (array_key_exists('authorized', $user) && $user['authorized'] == true) {
        echo 'Le compte est valide';
    } else {
        echo "Le compte n'est pas autorisé ";
    }
}

verifierCompte($utilisateur);


// Fonction 6 : verifier si un compte utilisateur est valide dans un tableau a la cle autorized et rajouter un commentaire dans le tableau
// function 
// function 6
echo "<br>";

function checkUserComm($user)
{
    if (array_key_exists('authorized', $user) && $user['authorized'] == true) {
        $user['commentaire'] = "L'utilisateur" . $user['nom'] . ' est valide';

        echo $user['commentaire'];
    } else {
        $user['commentaire'] = "L'utilisateur" . $user['nom'] . " n'est pas valide";
        echo $user['commentaire'];
    }
}

echo "<br>";


checkUserComm($utilisateur);















 

 
 
 ?>