<?php
class personne{
    private $Nom;
    private $Prenom;
    private $Age;

public function __construct($Nom, $Prenom, $Age){
    $this->Nom=$Nom;
    $this->Prenom=$Prenom;
    $this->Age=$Age;
}
public function getNomComplet($nom, $prenom) {
    return $prenom . ' ' . $nom;
}
public function setNomComplet($nouveauNom) {
    $this->nom = $nouveauNom;
}
}
class employe{
    var $Nom;
    var $Prenom;
    var $Age;
    var $Salaire

public function __construct($Nom, $Prenom, $Age,$Salaire){
    $this->Nom=$Nom;
    $this->Prenom=$Prenom;
    $this->Age=$Age;
    $this->Salaire=$Salaire;
    }

}

$personne1 = new personne('Papa','Laye','3');
$personne2 = new personne('Mamadou','Kane','10');
$employe1 = new employe('Papa','Laye','3',250);
$employe2 = new employe('Mamadou','Kane','10',1000);
$nomComplet = getNomComplet('papa', 'Laye');
var_dump($personne1);
var_dump($personne2);

?>