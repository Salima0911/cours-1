<?php 

// Exercice 1 : Créer un tableau associatif d'auteurs avec un index pour chaque auteur
$auteurs  = [
    
    [
        'auteur1' => '1',
         'nom' => 'bob marley',
        'prenom' => 'bob',
       
    ],
    [
        'auteur2' => '2',
        'nom' => 'mylene',
        'prenom' => 'farmer',
    ],
    [
        'auteur3' => '3',
        'nom' => 'Jane ',
        'prenom' => 'Smith',
    ],
     
]; 
// Exercice 2 : Créer un tableau associatif contenant les détails suivants : la citation et l'id de l'auteur
$citations = [
    [
        "id_auteur" => '1',
         'citation' => 'aide les gens tu les trouvera apres',
         "img" => "img/image1.jpg",
       
       
    ],
    [
        "id_auteur" => '2',
        'citation' => "Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés.",
        "img" => "img/image.jpg",
        
    ],
    [
        "id_auteur" => '3',
        'citation' => 'Un seul être vous manque et tout est dépeuplé. ',
        "img" => "img/aromatherapiesu5vg7.jpg",
       
    ]
     
   ] ;
//    Exercice 3 : Créer une fonction pour aller chercher une citation au "hasard" qui change à chaque rechargement de page

        function citation_aleatoire($monTableauDeCitations)
        {
            $indexAleatoire = array_rand($monTableauDeCitations);
            return $monTableauDeCitations[$indexAleatoire];
        };
        $maVariable =citation_aleatoire($citations);
        
       
        // echo $maVariable["citation"];

        //Exercice 4 : Afficher en HTML la citation
        
        ?><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>
        <div class="container">
        <div class="card text-bg-dark ">
        <?php echo "<img  src ='{$maVariable['img']}'  >"; ?>
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p style="color: red; font-size: 20px; margin:auto" ><?php echo $maVariable["citation"]; ?></p>
    </div>      
         
    
  </div>
</div>
            
        
             

         
       
        </body>
        </html>
<!-- Exercice 6 : Ajouter la date du jour sous la forme de : "Bonjour, nous sommes le jour 3 mois 2024 et il est 12h45" -->

<?php
 echo '<br><br>';
  $day = date(3);
$month = date('m');
$year = date('y');

$hour = date('12');
// les minutes  s'appelle avec "i" et non m
$minute = date('45');
//maintenant  on peut afficher  ce qu'on  a receuilli
echo 'Bonjour! Nous sommes le  ' . $day . '/' . $month .  '/' . $year .  'et il est' . $hour. 'h' .$minute;







 ?>
 
