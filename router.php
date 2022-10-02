<?php
require_once './app/controllers/game.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'public'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller
$GameController = new GameController();


// tabla de ruteo
switch ($params[0]) {
    case 'public':
        if(empty($params[1])){
            $GameController->ShowHome();
            break;
        }
        else{
            switch ($params[1]){
                case 'personage':
                    if (empty($params[2]))
                        $GameController->showPersonage();
                    else
                        $GameController->showPersonage($params[2]);
                    break;
                case 'race':
                    if (empty($params[2]))
                        $GameController->showRace();
                    else
                        $GameController->showRace($params[2]);
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
                            case 'edit':
                                if(!empty($params[3])){
                                    if($params[3] == 'confirm'){
                                        $id = $params[4];
                                        $GameController->editPersonage($id);
                                    }
                                    else{
                                        $id = $params[3];
                                        $GameController->preEditPersonage($id);
                                    }
                                }
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
                                if(!empty($params[3])){
                                    if($params[3] == 'confirm'){
                                        $id = $params[4];
                                        $GameController->delete($id);
                                    }
                                    else{
                                        $id = $params[3];
                                        $GameController->deleteRace($id);
                                    }
                                }
                                
                                break;
                            case 'edit':
                                if(!empty($params[3])){
                                    if($params[3] == 'confirm'){
                                        $id = $params[4];
                                        $GameController->editRace($id);
                                    }
                                    else{
                                        $id = $params[3];
                                        $GameController->preEditRace($id);
                                    }
                                }
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
