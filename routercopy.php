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
        if(empty($params[1])){
            $GameController = new GameController();
            $GameController->ShowHome();
            break;}
    case 'login':
        $SessionController = new SessionController();
        $SessionController->showLogin();
        break;
    case 'validate':
        $SessionController = new SessionController();
        $SessionController->validateUser();
        break;
    case 'logout':
        $SessionController = new SessionController();
        $SessionController->logout();
        break;
    case 'personages':
        $GameController = new GameController();
        if (empty($params[1]))
            $GameController->showPersonage();
        else
            $GameController->showPersonage($params[1]);
        break;
    case 'races':
        $GameController = new GameController();
        if (empty($params[1]))
            $GameController->showRace();
        else
            $GameController->showRace($params[1]);
        break;
    case 'admin-personages':
        $GameController = new GameController();
        if(empty($params[1])){
            $GameController->showAdmPersonage();
        }else{   
            switch ($params[1]){
                case 'add':
                    $GameController->addPersonage();
                    break;
                case 'delete':
                    $id = $params[2];
                    $GameController->deletePersonage($id);
                    break;
                case 'edit':
                    if(!empty($params[2])){
                        if($params[2] == 'confirm'){
                            $id = $params[3];
                            $GameController->editPersonage($id);
                        }
                        else{
                            $id = $params[2];
                            $GameController->preEditPersonage($id);
                        }
                    }
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
                    $GameController->addRace();
                    break;
                case 'delete':
                    if(!empty($params[2])){
                        if($params[2] == 'confirm'){
                            $id = $params[3];
                            $GameController->delete($id);
                        }
                        else{
                            $id = $params[2];
                            $GameController->deleteRace($id);
                        }
                    }
                    break;
                case 'edit':
                    if(!empty($params[2])){
                        if($params[2] == 'confirm'){
                            $id = $params[3];
                            $GameController->editRace($id);
                        }
                        else{
                            $id = $params[2];
                            $GameController->preEditRace($id);
                        }
                    }
                    break;
            }
        }
        break;

    default:
        echo('404 Page not found');
        break;
}
