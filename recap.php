<?php

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$numeroFacture=uniqid();
$nom= $_POST["Nom"];
$prenom=$_POST["prenom"];
$nbr=$_POST["nbrSandwish"];
$adresse=$_POST["adresse"];
$selectOption = $_POST['typeSandwish'];
$suplement='';
foreach($_POST['s'] as $value){
    $suplement.=" $value";
}

if ($nbr>10) {
    $sansremise=$nbr*4000;
    $remise=($nbr*4000*90)/100;


    echo" facture numero $numeroFacture <br> de $nom $prenom <br> $nbr Sandwish <br> $adresse <br> type $selectOption <br> supplément $suplement <br> prix $sansremise <br> prix avec remise $remise";
}
elseif (($nbr<10)&& ($nbr>0)) {
    $prix=$nbr*4;

    echo" facture numero $numeroFacture <br> de $nom $prenom <br> $nbr Sandwish <br> $adresse <br> type $selectOption <br> supplément $suplement<br> prix : $prix";
}
else {

alert("corrige le nombre des sandwish");


}


