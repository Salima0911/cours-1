<?php
 
 
$user = [
 
    'name' => 'Jeanne Martin',
    'email'=> 'jeanne.martin@example.com',
    'password' => 'Securite456',
    'age'=> 25
 
];
   // Modifier une valeur d'un élément
echo $user ['name'];
echo '<br>';
 
$user['name'] = 'Salima';
echo $user ['name'];
   // Ajouter une valeur à un tableau indexé (Ne marchera pas pour ce cas)
    // array_push($user, 'valeur');

 
// array = tableau
array_push($user, "adresse");
 
echo '<br>';
 
// $user['adresse'] = '1234 rue de la republique';
 
var_dump($user);
 
echo '<br>';
echo '<br>';
 
print_r($user);
echo $user;
 
echo '<br>';
$question = true ;
echo '<br>';
 
echo $question;
echo '<br>';
var_dump($question);
 
echo '<br>';
echo '<br>';
echo '<br>';
 
$reponse = 1;
echo $reponse;
echo '<br>';
var_dump($reponse);
echo '<br>';
 
$secondeQuestion = "1";
echo '<br>';
 
echo $secondeQuestion;
echo '<br>';
var_dump($secondeQuestion);

$user['adresse'] = '1234 rue de la republique';
 
var_dump($user);
    // die; Arrêter le code (Dans le cas où on veut débugger)
    echo '<br>';
    print_r($user);
 
    $haveComplement = false;
 
    if ($haveComplement) {
        $user['complement'] = 'Merci de ne passer sonner à la porte';
        echo '<br>';
        echo "L'utilisateur a un complément d'adresse : <br>";
        foreach($user as $element) {
            echo $element;
            echo '<br>';
        }
    } else {
        echo '<br>';
        echo "L'utilisateur n'a pas de complément d'adresse : <br>";
        foreach($user as $element) {
            echo $element;
            echo '<br>';
        }
    }
 
    if (array_key_exists('adresse', $user)) {
        echo "L'adresse de l'utilisateur est : " . $user['adresse'];
    } else {
        echo "L'utilisateur n'a pas d'adresse";
    }
    echo"<br>";

    // verfier  la presence d'une valeur dans un tableau
    $user = [
 
        'name' => 'Jeanne Martin',
        'email'=> 'jeanne.martin@example.com',
        'password' => 'Securite456',
        'age'=> 25
     
    ];
    var_dump($user);
    echo"<br>";
    if (in_array('non definie', $user)){}
         
 

   
    $users = [
    [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password' => 'password123',
        'age' => 30,
        'authorized' => true
    ],
    [
        'name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'password' => 'password456',
        'age' => 25,
        'authorized' => true
    ],
    [
        'name' => 'Mike Johnson',
        'email' => 'mike.johnson@example.com',
        'password' => 'password789',
        'age' => 35,
    ],
    [
        'name' => 'Sarah Williams',
        'email' => 'sarah.williams@example.com',
        'password' => 'passwordabc',
        'age' => 28,
        'authorized' => false
    ],
    [
        'name' => 'David Brown',
        'email' => 'david.brown@example.com',
        'password' => 'passwordxyz',
        'age' => 32,
    ]
];
echo"<br>";
// ici on parcours chaque element du tableau users. On nomme les elements du tableau user(au singulier)
// un tavleau d'utilisateurS  est compsé d'utkisateur (sans S).
foreach($users as $user){
 
    echo"<br>";

// on verifie  que la clé autorized existe, puis on verfie que la valeur de autorized est a true

if (array_key_exists('authorized', $user) && $user ['authorized'] == true ){
    // SI il est autorisé alors on affiche un message que le dit

    echo "L'utilisateur " . $user['name'] . "est autorisé";
    
}else{
    // sinon on affiche un message qui dis qu'il n'est pas autorisé;
    echo "L'utilisateur " . $user['name'] . " n'est pas autorisé";
    
 }
}
$user=[
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'password' => 'password123',
    'age' => 30,
    'authorized' => true
];
echo '<br><br>';
echo'Name  : ' . $user['name'];




$users = [
    [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password' => 'password123',
        'age' => 30,
        'authorized' => true
    ],
    [
        'name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'password' => 'password456',
        'age' => 25,
        'authorized' => true
    ],
];

echo '<br><br>';
// il permet de parcourir les utlistateur 

foreach($users as $user){
    foreach($user as $key =>$value){
        echo $key . ":" .$value ."<br>";
    }
}
foreach($users as $key=> $user){
    echo "utilisateur  numero: "  .$key;
    foreach($user as $key =>$value){
        echo $key . ":" .$value . "<br>";

    }

}
// permet parcourir les elements 