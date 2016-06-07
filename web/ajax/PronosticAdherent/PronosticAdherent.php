<?php

include("../Config.php");

class main {

    public $bdd;

    function __construct() {

        $c = new Config();
        $this->bdd = $c->connexion();
    }

    function PronosticAdherent($id) {

        $req = "select * from user where id='" . $id . "';";
        $res = $this->bdd->query($req);
        return $res->fetchAll();
    }

}

$m = new main();
$id = $_GET['id'];
$mise = $_GET['mise'];
$matrice = $m->PronosticAdherent($id);
foreach ($matrice as $tab) {

    if ($tab['points_adherent'] >= $mise) {

        echo "<input style='margin-left: 65%' type='submit' value='Valider' id='valider' class='btn btn-flat2'>";
    } else
        echo "<font style='margin-left: 65%' color='red'>Vos n'avez pas assez de point</font>";
}

?>    