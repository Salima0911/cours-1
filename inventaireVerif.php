<?php 
$prix_unitaire = 10;
$quantite_achetee = 2;
$montant_total= $prix_unitaire * $quantite_achetee;



if ($montant_total >100){
    $montant_apres_reduction =$montant_total- ($montant_total* 10)/100; 
    echo  $montant_apres_reduction;

}else {
    echo $montant_total ."€ ". "vous n'avez pas la reduction";
}

 ?>