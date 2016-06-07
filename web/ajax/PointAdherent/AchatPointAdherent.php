<?php

include("../Config.php");

class main {

    public $bdd;

    function __construct() {

        $c = new Config();
        $this->bdd = $c->connexion();
    }

    function SoldeAdherent($id) {

        $req = "select * from user where id='" . $id . "';";
        $res = $this->bdd->query($req);
        return $res->fetchAll();
    }

}

$m = new main();
$id = $_GET['id'];
$solde = $_GET['solde'];
$matrice = $m->SoldeAdherent($id);
foreach ($matrice as $tab) {

    if ($tab['solde_adherent'] >= $solde) {

        echo "<input style='margin-left: 0%' type='submit' value='Acheter'  class='btn btn-flat2'>";
    } else
        echo "<br><font color='red'>Votre solde est insuffisant</font>";
}

?>    