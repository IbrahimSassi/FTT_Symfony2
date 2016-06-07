<?php

include("../Config.php");

class main {

    public $bdd;

    function __construct() {

        $c = new Config();
        $this->bdd = $c->connexion();
    }

    function PointAdherent($id) {

        $req = "select * from user where id='" . $id . "';";
        $res = $this->bdd->query($req);
        return $res->fetchAll();
    }

}

$m = new main();
$id = $_GET['id'];
$point = $_GET['point'];
$matrice = $m->PointAdherent($id);
foreach ($matrice as $tab) {

    if ($tab['points_adherent'] >= $point) {

        echo "<input style='margin-left: 0%' type='submit' value='Vendre'  class='btn btn-flat2'>";
    } else
        echo "<br><font color='red'>Vos points sont insuffisant</font>";
}

?>    