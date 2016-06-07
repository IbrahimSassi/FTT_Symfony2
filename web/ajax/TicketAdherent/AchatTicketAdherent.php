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
$prix = $_GET['prix'];
$matrice = $m->SoldeAdherent($id);
foreach ($matrice as $tab) {

    if ($tab['solde_adherent'] >= $prix) {

        echo "<button class='btn btn-flat btn-xs' aria-hidden='true' style='font-size: 2em;'>
                                <i class='fa fa-shopping-cart' ></i> Acheter
                            </button>";
    } else
        echo "<br><font color='red'>Votre solde est insuffisant</font>";
}

?>    