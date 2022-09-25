<?php
require_once './app/controllers/game.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$GameController = new GameController();


// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $GameController->ShowHome();
        break;
    case 'public':
        if(empty($params[1])){
            $GameController->ShowHome();
            break;
        }
        else{
            switch ($params[1]){
                case 'personage':
                    $GameController->showPersonage();
                    break;
                case 'race':
                    $GameController->showRace();
                    break;
                default:
                    echo('404 Page not found');
                    break;
            }
            break;
        }
    case 'admin':
        if(empty($params[1])){
            $GameController->ShowHome();
            break;
        }
        else{
            switch ($params[1]){
                case 'personage':
                    if(empty($params[2])){
                        $GameController->showAdmPersonage();
                    }else{   
                        switch ($params[2]){
                            case 'add':
                                $GameController->addPersonage();
                                break;
                            case 'delete':
                                $id = $params[3];
                                $GameController->deletePersonage($id);
                                break;
                            default:
                                echo('404 Page not found');
                                break;
                        }
                    }
                    break;
                case 'race':
                    if(empty($params[2])){
                        $GameController->showAdmRace();
                    }else{   
                        switch ($params[2]){
                            case 'add':
                                $GameController->addRace();
                                break;
                            case 'delete':
                                $id = $params[3];
                                $GameController->deleteRace($id);
                                break;
                            default:
                                echo('404 Page not found');
                                break;
                        }
                    }
                    break;
                default:
                    echo('404 Page not found');
                    break;
            }
            break;
        }
    default:
        echo('404 Page not found');
        break;
}
