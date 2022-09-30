<?php
require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";

class GameView {
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    // muestra la vista cuando se tocael icono logo warcraft
    function showHome(){
        //$this->smarty->assign("BASE_URL", BASE_URL);
        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    // muestra primera solapa de la barra de navegacion
    function showPersonage($personages,$detail=null) {

        $this->smarty->assign("personages", $personages);
        $this->smarty->assign("detail", $detail);

        $this->smarty->display('./templates/showPersonage.tpl');
    }

    // muestra segunda solapa de la barra de navegacion
    function showRace($races,$details=null) {

        $this->smarty->assign("races", $races);
        $this->smarty->assign("details", $details);
        $this->smarty->display('./templates/showRace.tpl');
    }

    function showAdmPersonage($races,$personages) {

        $this->smarty->assign("personages", $personages);
        $this->smarty->assign("races", $races);
        $this->smarty->display('./templates/showAdmPersonage.tpl');
    }

    function showAdmRace($races) {
        include './templates/header.php';   
    
        include './templates/form_alta.php';  

        echo '<ul class="list-group">';
        foreach ($races as $race) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> Nombre: <b>$race->nombre</b> - faccion: <b>$race->faccion</b> </span>
                    <a href='admin/race/delete/$race->id_raza' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.php';
    }

}