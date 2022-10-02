<?php
require_once './app/models/personage.model.php';
require_once './app/models/race.model.php';
require_once './app/views/game.view.php';

class GameController {
    private $personage_model;
    private $race_model;
    private $view;

    public function __construct() {
        $this->personage_model = new PersonageModel();
        $this->race_model = new RaceModel();
        $this->view = new GameView();
    }

    public function showHome() {
        $this->view->showHome();
    }

    //showPersonage
    public function showPersonage($id=null) {
        $personage = $this->personage_model->getAll();
        //$race = $this->race_model->getAll();
        if (!isset($id))
            $this->view->showPersonage($personage);
        else{ 
            $detalle = $this->personage_model->getPersonageWithRace($id);
            $this->view->showPersonage($personage,$detalle);
        }
    }

    public function showRace($id=null) {
        $race = $this->race_model->getAll();
        if (!isset($id)){
            $this->view->showRace($race);}
        else{
            $personages_race = $this->personage_model->getOneRacePersonagesComplete($id);
            $this->view->showRace($race,$personages_race);
        }

    }

    public function showAdmPersonage() {
        $personage = $this->personage_model->getAll();
        $race = $this->race_model->getAll();
        $this->view->showAdmPersonage($race,$personage);
    }

    public function addPersonage() {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $race = $_POST['race'];

        $id = $this->personage_model->insert($name, $lastname, $class, $race);

        header("Location: " . BASE_URL . "admin/personage"); 
    }
   
    public function deletePersonage($id) {
        $this->personage_model->delete($id);
        header("Location: " . BASE_URL . "admin/personage");
    }

    public function showAdmRace() {
        $race = $this->race_model->getAll();
        $this->view->showAdmRace($race);
    }

     //addRace
     public function addRace() {
        $name = $_POST['name'];
        $faccion = $_POST['faccion'];

        $id = $this->race_model->insert($name, $faccion);

        header("Location: " . BASE_URL . "admin/race"); 
    }

    public function deleteRace($id) {
        $personages = $this->personage_model->getOneRacePersonages($id);
        if (empty($personages)){
            $this->delete($id);
        }
        else{
            $this->view->showConfirmDelete($personages);
        }
    }

    public function delete($id) {
        $this->race_model->delete($id);
        header("Location: " . BASE_URL . "admin/race");
    }
    
    public function preEditPersonage($id) {
        $edit = $this->personage_model->getPersonage($id);
        $race = $this->race_model->getAll();
        $this->view->editAdmPersonage($edit,$race);
    }

    public function editPersonage($id) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $race = $_POST['race'];

        $idw = $this->personage_model->update($name, $lastname, $class, $race, $id);

        header("Location: " . BASE_URL . "admin/personage"); 
    }

    public function preEditRace($id) {
        $edit = $this->race_model->getRace($id);

        $this->view->editAdmRace($edit);
    }

    public function editRace($id) {
        $name = $_POST['name'];
        $faccion = $_POST['faccion'];
        
        $idw = $this->race_model->update($name, $faccion, $id);

        header("Location: " . BASE_URL . "admin/race"); 
    }
}