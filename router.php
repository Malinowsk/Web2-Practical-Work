<?php
require_once './app/controllers/game.controller.php';
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
        $GameController = new GameController();
        if(empty($params[1]))
            $GameController->ShowHome();
        else
            $GameController->showDefault();
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
        $GameController = new GameController();
        if (empty($params[1]))
            $GameController->showPersonage();
        else
            if(empty($params[2]))
                $GameController->showPersonage($params[1]);
            else
                $GameController->showDefault();
        break;
    case 'races':
        $GameController = new GameController();
        if (empty($params[1]))
            $GameController->showRace();
        else
            if(empty($params[2]))
                $GameController->showRace($params[1]);
            else
                $GameController->showDefault();
        break;
    case 'admin-personages':
        $GameController = new GameController();
        if(empty($params[1])){
            $GameController->showAdmPersonage();
        }else{   
            switch ($params[1]){
                
                case 'add':
                    if(empty($params[2]))
                        $GameController->addPersonage();
                    else
                        $GameController->showDefault();
                    break;

                case 'delete':
                    if(!empty($params[2])){
                        $id = $params[2];
                        $GameController->deletePersonage($id);
                    }
                    else
                        $GameController->showDefault();
                    break;

                case 'edit':
                    if(empty($params[2]) or !empty($params[3]))
                        $GameController->showDefault();
                    else
                        $GameController->preEditPersonage($params[2]);
                    break;

                case 'edit-confirm':
                    if(empty($params[2]) or !empty($params[3]))
                        $GameController->showDefault();
                    else
                        $GameController->editPersonage($params[2]);
                    break;

                default:
                    $GameController->showDefault();
                    break;
            }
        }
        break;

    case 'admin-races':
        $GameController = new GameController();
        if(empty($params[1])){
            $GameController->showAdmRace();
        }else{   
            switch ($params[1]){
                
                case 'add':
                    if(empty($params[2]))
                        $GameController->addRace();
                    else
                        $GameController->showDefault();
                    break;

                case 'delete':
                    if(empty($params[2]) or !empty($params[3]))
                        $GameController->showDefault();
                    else
                        $GameController->deleteRace($params[2]);
                    break;

                case 'delete-confirm':
                    if(empty($params[2]) or !empty($params[3]))
                        $GameController->showDefault();
                    else
                        $GameController->delete($params[2]);
                    break;

                case 'edit':
                    if(empty($params[2]) or !empty($params[3]))
                        $GameController->showDefault();
                    else
                        $GameController->preEditRace($params[2]);
                    break;

                case 'edit-confirm':
                    if(empty($params[2]) or !empty($params[3]))
                        $GameController->showDefault();
                    else
                        $GameController->editRace($params[2]);
                    break;

                default:
                    $GameController->showDefault();
                    break;
            }
        }
        break;
    default:
        $GameController = new GameController();
        $GameController->showDefault();
        break;
}
