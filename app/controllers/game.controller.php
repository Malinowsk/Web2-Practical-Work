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
    public function showPersonage() {
        $personage = $this->personage_model->getAll();
        $race = $this->race_model->getAll();
        $this->view->showPersonage($race,$personage);
    }


    public function showAdmPersonage() {
        $personage = $this->personage_model->getAll();
        $race = $this->race_model->getAll();
        $this->view->showAdmPersonage($race,$personage);
    }

    function addPersonage() {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $race = $_POST['race'];

        $id = $this->personage_model->insert($name, $lastname, $class, $race);

        header("Location: " . BASE_URL . "admin/personage"); 
    }
   
    function deletePersonage($id) {
        $this->personage_model->deleteById($id);
        header("Location: " . BASE_URL . "admin/personage");
    }

    public function showRace() {
        $race = $this->race_model->getAll();
        $this->view->showRace($race);
    }

    public function showAdmRace() {
        $race = $this->race_model->getAll();
        $this->view->showAdmRace($race);
    }

     //addRace
     function addRace() {
        $name = $_POST['name'];
        $faccion = $_POST['faccion'];

        $id = $this->race_model->insert($name, $faccion);

        header("Location: " . BASE_URL . "admin/race"); 
    }

    function deleteRace($id) {
        $this->race_model->deleteById($id);
        header("Location: " . BASE_URL . "admin/race");
    }

}
