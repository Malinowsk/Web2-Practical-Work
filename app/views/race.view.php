<?php
require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";

class RaceView {
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    // muestra la vista cuando se tocael icono logo warcraft
    function showHome(){
        //var_dump($loggedIn);
        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/home.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    // muestra segunda solapa de la barra de navegacion
    function showRace($races,$details=null) {

        $this->smarty->assign("races", $races);
        $this->smarty->assign("details", $details);
        $this->smarty->display('./templates/showRace.tpl');
    }

    function showAdmRace($races) {
        $this->smarty->assign("races", $races);
        $this->smarty->display('./templates/showAdmRace.tpl');
    }

    function editAdmRace($edit) {
        $this->smarty->assign("edit", $edit);
        $this->smarty->display('./templates/form_edit_race.tpl');
    }

    function showConfirmDelete($personages){
        $this->smarty->assign("personages", $personages);
        $this->smarty->display('./templates/showConfirmDelete.tpl');
    }

    function showDefault() {
        $this->smarty->display('./templates/default.tpl');
    }
    

}