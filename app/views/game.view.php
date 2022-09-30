<?php
require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";

class GameView {
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    function showHome(){
        $this->smarty->assign("BASE_URL", BASE_URL);
        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    function showPersonag($races,$personages) {
        include './templates/header.php';   
    
        echo "<h1>Lista de Personaje</h1>";
        echo '<ul class="list-group">';
        foreach ($personages as $personage) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> Nombre: <b>$personage->nombre</b> - Apellido: <b>$personage->apellido</b> - Clase: <b>$personage->clase </b> </span>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.php';
    }

    function showPersonage($races,$personages,$detalle=null) {
        
        $this->smarty->assign("personages", $personages);
        $this->smarty->assign("races", $races);
        $this->smarty->assign("detalle", $detalle);

        $this->smarty->display('./templates/showPersonaje.tpl');
    }


    function showAdmPersonage($races,$personages) {
        include './templates/header.php';   
    
        echo $this->form_add_personage($races);

        echo '<ul class="list-group">';
        foreach ($personages as $personage) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> Nombre: <b>$personage->nombre</b> - Apellido: <b>$personage->apellido</b> - Clase: <b>$personage->clase </b> </span>
                    <a href='admin/personage/delete/$personage->id_personaje' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.php';
    }

    private function form_add_personage($races){

        $form = "<form action='admin/personage/add' method='POST' class='my-4'>
                    <h1>Agregar Personaje</h1>
                    <div class='row'>
                        <div class='col-3'>
                            <div class='form-group'>
                                <label>Nombre</label>
                                <input name='name' type='text' class='form-control'>
                            </div>
                        </div>
                        
                        <div class='col-3'>
                            <div class='form-group'>
                                <label>Apellido</label>
                                <input name='lastname' type='text' class='form-control'>
                            </div>
                        </div>

                        <div class='col-3'>
                            <div class='form-group'>
                                <label>Clase</label>
                                <input name='class' type='text' class='form-control'>
                            </div>
                        </div>

                        <div class='col-3'>
                            <div class='form-group'>
                                <label>Raza</label>
                                <select name='race' class='form-control'>";
           
                                foreach ($races as $race) {
                                    $form.= "<option value='$race->id_raza'>$race->nombre</option>";
                                }

            $form.=             '</select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                </form>';

        return $form;
    }
  
    function showRace($races) {
        include './templates/header.php';   
     
        echo "<h1>Lista de Razas</h1>";

        echo '<ul class="list-group">';
        foreach ($races as $race) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> Nombre: <b>$race->nombre</b> - faccion: <b>$race->faccion</b> </span>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.php';
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