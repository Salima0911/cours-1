
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ma premiere page</h1>
    <?php 
    echo "hello Word";
    echo"ceci  est un message <strong>en gras </strong>";
    $age = 30;
    echo $age;
    $nom = "Kawtar";
    echo$nom;
    $nom ="je m'appelle Kawtar";
    echo $nom;


    $question =true;
    echo $question;

    $maValue = null;
    echo$maValue;
    $fullName = "Ibtissem";
    $welcome = "et bienvenue sur le site";
    echo "je m'appelle  ". $fullName. ' ' .$welcome;

    echo "voila un message contenant {$fullName} , a l'interieur";


    
     ?>
</body>
</html>