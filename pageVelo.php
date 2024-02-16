<!-- 
cree le fichier pageVelo.php
$velos = [
    ['VTT', 'Rouge', 'Marque A', '27,5 pouces'],
    ['Vélo de route', 'Noir', 'Marque B', 'option M'],
    ['Vélo électrique', 'Bleu', 'Marque C', 'Batterie 500W'],
    ['BMX', 'Vert', 'Marque D', 'Pneus larges'],
    ['Vélo pliable', 'Gris', 'Marque E', 'Compact et léger']
];



ajoutez des index a ce tableau puis affichez tout les velo de ce tableau dans une structure html  --> -->

<?php 

$velos = [
    [
   "Type"=>'VTT',
    "couleur" => 'Rouge',
    "marque" => 'Marque A',
    "option" => '27,5 pouces',
        ],

    [
      "Type"=>'Vélo de route',
      "couleur" => 'Noir',
       "marque" => 'Marque B',
       "option" => 'option M',
    ],

    [
        "Type"=>'Vélo électrique',
        "couleur" => 'Bleu',
         "marque" => 'Marque C',
         "option" =>'Batterie 500W' ,
      ],
      [
        "Type"=>'BMX',
        "couleur" =>'Vert' ,
         "marque" =>'Marque D' ,
         "option" => 'Pneus larges',
      ],
      [
        "Type"=>'Vélo pliable',
        "couleur" => 'Gris',
         "marque" =>'Marque E',
         "option" =>'Compact et léger',
      ],  
];
 ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>velos</h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>couleur</th>
                <th>marque</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($velos as $velo) { ?>
                <tr>
                    <td><?php echo $velo['Type']; ?></td>
                    <td><?php echo $velo['couleur']; ?></td>
                    <td><?php echo $velo['marque']; ?></td>
                    <td><?php echo $velo['option']; ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>


</body>

</html>