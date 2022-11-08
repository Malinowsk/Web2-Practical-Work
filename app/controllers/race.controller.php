<?php
require_once './app/models/race.model.php';
require_once './app/views/race.view.php';
require_once './app/helpers/auth.helper.php';
require_once './app/models/personage.model.php';

class RaceController {
    private $race_model;
    private $view;
    private $authHelper;
    private $personage_model;
    
    public function __construct() {
        $this->personage_model = new PersonageModel();
        $this->race_model = new RaceModel();
        $this->view = new RaceView();
        $this->authHelper = new AuthHelper();
    }

    public function showHome() {
        $this->view->showHome();
    }

    public function showRace($id=null) {
        $race = $this->race_model->getAll();
        
        if (!isset($id))
            $this->view->showRace($race);
        else{
            $personages_race = $this->personage_model->getOneRacePersonagesComplete($id);
            if (!isset($personages_race)){
                $personages_race=[];
            }
            $this->view->showRace($race,$personages_race);
        }

    }

    public function showAdmRace() {
        $this->authHelper->checkLoggedIn();
        $race = $this->race_model->getAll();
        $this->view->showAdmRace($race);
    }

     //addRace
     public function addRace() {

        $this->authHelper->checkLoggedIn();

        if (!empty($_POST)){
            $name = $_POST['name'];
            $faccion = $_POST['faccion'];

            $id = $this->race_model->insert($name, $faccion);

            header("Location: " . BASE_URL . "admin-races");}
        else
            $this->view->showDefault();
    }

    public function deleteRace($id) {
        $this->authHelper->checkLoggedIn();
        $personages = $this->personage_model->getOneRacePersonages($id);
        if (empty($personages)){
            $this->delete($id);
        }
        else{
            echo "sdsf";
            $this->view->showConfirmDelete($personages);
        }
    }

    public function delete($id) {
        $this->authHelper->checkLoggedIn();

        $cant_filas_borradas = $this->race_model->delete($id);
        if ( $cant_filas_borradas != 0 )
            header("Location: " . BASE_URL . "admin-races");
        else
            $this->view->showDefault();
    }
    

    public function preEditRace($id) {

        $this->authHelper->checkLoggedIn();
        
        $edit = $this->race_model->getRace($id);
        if (!empty($edit))
            $this->view->editAdmRace($edit);      
        else
            $this->view->showDefault();
    }

    public function editRace($id) {

        $this->authHelper->checkLoggedIn();
        
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $faccion = $_POST['faccion'];
            
            $idw = $this->race_model->update($name, $faccion, $id);

            header("Location: " . BASE_URL . "admin-races");}
        else
            $this->view->showDefault(); 
    }

    public function showDefault() {
        $this->view->showDefault();
    }
    

}