<?php 
$number = 2 + 4;
echo $number;

echo'<br>';

$number = 2 - 4 ;
echo$number;
echo'<br>';

$number = 2*4;
echo $number;
echo'<br>';

$number = 3 * 3 + 1;
echo $number;
echo'<br>';

$number = 10/2 ; 
echo $number;
echo'<br>';

$number = (1+3)*2;
echo $number ;
echo'<br>';

$number = 10;

$result = ($number +5)*$number;
echo $result;
echo'<br>';

//<
//>
//>=
//==
// ===
// !==

echo'<br>';

$isActive = true;
if ($isActive === true){
    echo " Le compte est actif";
}else {
    echo " Le compte est inactif";
}
echo "<br>";

$isAllowedToEnter ="non";
if($isAllowedToEnter === "oui"){
    echo "vous  etes autorisé";

}elseif ($isAllowedToEnter ==="non"){
    echo "vous n'etes pas autorisé ";
}else {
    echo " Je n'ai pas compris ";
}
echo "<br>";
$age = 20;
if($age < 20){
    echo" vous avez moins de 20 ans";

}elseif ($age >= 20 && $age < 30){
    echo "vous avez entre  20 et 30 ans ";

}else{
    echo "vous avez plus de  30 ans ";
}
echo "<br>";
$isAllowedToEnter = false;
if($isAllowedToEnter){
    echo" Bienvenue  sur le site";
    }else{
        echo" Vous n'etes pas autorisé";
    }
    if(!$isAllowedToEnter){
        echo "Site interdit pour vous";
    }

    $isEnabled = true;
    $isAdmin = false;

    if ($isEnabled && $isAdmin){
        echo "Acces administrateur validé";
        
    }else{
        echo "accés refusé";
    }

    echo "<br>";
    if ($isEnabled || $isAdmin){
        echo "Acces administrateur validé";
        
    }else{
        echo "accés refusé";
    }

    echo "<br>";
    $isEnabled = true;
    $isAdmin = true;
    $isOwner = false;
    if ($isEnabled && $isOwner|| $isAdmin){
        echo "Acces administrateur validé";
        
    }else{
        echo "accés refusé";
    }


?>