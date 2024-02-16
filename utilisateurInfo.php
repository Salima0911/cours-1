<?php 
// exercice 4
// creer un fichier utilisateurInfo.php
// Utilisateur 1 :
// Nom : John Doe
// Email : john.doe@example.com
// Mot de passe : Password123
// age : 30
// Utilisateur 2 :
// Nom : Jane Smith
// Email : jane.smith@example.com
// Mot de passe : Secure456
// age : 28

// Stockez ces informations dans des tableaux associatifs.

// Affichez l'email de l'utilisateur 2.

// Utilisez une boucle while pour afficher 10 fois "Bonjour, Utilisateur !" en remplaçant "Utilisateur" par le nom de l'utilisateur 1.




// $user1= ["John Doe", "john.doe@example.com", "Password123",30];
// $user2= ["Jane Smith", "jane.smith@example.com", "Secure456",28];

$users = [
 // tableau 0 
    ["John Doe", "john.doe@example.com", "Password123",30],
//  tableau 1
    ["Jane Smith", "jane.smith@example.com", "Secure456",28]
];
// Affichez l'email de l'utilisateur 2
echo $users[1][1]; // aficher l'email de utilsateur 1 
echo $users[1][3]; // afficher dans le tableau 2 et  age de user 2 
// Utilisez une boucle while pour afficher 10 fois "Bonjour, Utilisateur !" en remplaçant "Utilisateur" par le nom de l'utilisateur 1.
echo $users[0][2];


$index =1;
while($index <=10){

    echo "bonjour {$users[0] [0]} !" ;
   
    $index++;
}



$site = [
[
    ["John Doe", "john.doe@example.com", "Password123",30],
    ["Jane Smith", "jane.smith@example.com", "Secure456",28]
],
[
    ["soupe", "cocotte",'4personnes'],
    ["tajin", "cocotte", "10personnes"]
]
];



echo $site [1][1][2];



?>;