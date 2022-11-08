<?php
require_once './app/controllers/personage.controller.php';
require_once './app/controllers/race.controller.php';
require_once './app/controllers/session.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $PersonageController = new PersonageController();
        if(empty($params[1]))
            $PersonageController->ShowHome();
        else
            $PersonageController->showDefault();
        break;
    case 'login':
        $SessionController = new SessionController();
        if(empty($params[1]))
            $SessionController->showLogin();
        else
            $SessionController->showDefault();
        break;
    case 'validate':
        $SessionController = new SessionController();
        if(empty($params[1]))
            $SessionController->validateUser();
        else
            $SessionController->showDefault();
        break;
    case 'logout':
        $SessionController = new SessionController();
        if(empty($params[1]))
            $SessionController->logout();
        else
            $SessionController->showDefault();
        break;
    case 'personages':
        $PersonageController = new PersonageController();
        if (empty($params[1]))
            $PersonageController->showPersonage();
        else
            if(empty($params[2]))
                $PersonageController->showPersonage($params[1]);
            else
                $PersonageController->showDefault();
        break;
    case 'races':
        $RaceController = new RaceController();
        if (empty($params[1]))
            $RaceController->showRace();
        else
            if(empty($params[2]))
                $RaceController->showRace($params[1]);
            else
                $RaceController->showDefault();
        break;
    case 'admin-personages':
        $PersonageController = new PersonageController();
        if(empty($params[1])){
            $PersonageController->showAdmPersonage();
        }else{   
            switch ($params[1]){
                
                case 'add':
                    if(empty($params[2]))
                        $PersonageController->addPersonage();
                    else
                        $PersonageController->showDefault();
                    break;

                case 'delete':
                    if(!empty($params[2])){
                        $id = $params[2];
                        $PersonageController->deletePersonage($id);
                    }
                    else
                        $PersonageController->showDefault();
                    break;

                case 'edit':
                    if(empty($params[2]) or !empty($params[3]))
                        $PersonageController->showDefault();
                    else
                        $PersonageController->preEditPersonage($params[2]);
                    break;

                case 'edit-confirm':
                    if(empty($params[2]) or !empty($params[3]))
                        $PersonageController->showDefault();
                    else
                        $PersonageController->editPersonage($params[2]);
                    break;

                default:
                    $PersonageController->showDefault();
                    break;
            }
        }
        break;

    case 'admin-races':
        $RaceController = new RaceController();
        if(empty($params[1])){
            $RaceController->showAdmRace();
        }else{   
            switch ($params[1]){
                
                case 'add':
                    if(empty($params[2]))
                        $RaceController->addRace();
                    else
                        $RaceController->showDefault();
                    break;

                case 'delete':
                    if(empty($params[2]) or !empty($params[3]))
                        $RaceController->showDefault();
                    else
                        $RaceController->deleteRace($params[2]);
                    break;

                case 'delete-confirm':
                    if(empty($params[2]) or !empty($params[3]))
                        $RaceController->showDefault();
                    else
                        $RaceController->delete($params[2]);
                    break;

                case 'edit':
                    if(empty($params[2]) or !empty($params[3]))
                        $RaceController->showDefault();
                    else
                        $RaceController->preEditRace($params[2]);
                    break;

                case 'edit-confirm':
                    if(empty($params[2]) or !empty($params[3]))
                        $RaceController->showDefault();
                    else
                        $RaceController->editRace($params[2]);
                    break;

                default:
                    $RaceController->showDefault();
                    break;
            }
        }
        break;
    default:
        $PersonageController = new PersonageController();
        $PersonageController->showDefault();
        break;
}
