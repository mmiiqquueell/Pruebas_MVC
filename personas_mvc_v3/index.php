<?php
require_once("db/db.php");
require_once("controllers/personas_controller.php");
require_once("controllers/coches_controller.php");
require_once("controllers/usuarios_controller.php");

if (isset($_GET['controller']) && isset($_GET['action'])) {

    if ($_GET['controller'] == "personas") {

        if ($_GET['action'] == "view") {
            $controller = new personas_controller();
            $controller->view();
        } elseif ($_GET['action'] == "add") {
            $controller = new personas_controller();
            $controller->add();
        } elseif ($_GET['action'] == "insert") {
            $controller = new personas_controller();
            $controller->insert();
        } elseif ($_GET['action'] == "delete") {
            $controller = new personas_controller();
            $controller->delete();
        } elseif ($_GET['action'] == "ordenar_nombre") {
            $controller = new personas_controller();
            $controller->ordenar_nombre();
        } elseif ($_GET['action'] == "ordenar_edad") {
            $controller = new personas_controller();
            $controller->ordenar_edad();
        }
        
    } elseif ($_GET['controller'] == "coches") {

        if ($_GET['action'] == "view") {
            $controller = new coches_controller();
            $controller->view();
        } elseif ($_GET['action'] == "add") {
            $controller = new coches_controller();
            $controller->add();
        } elseif ($_GET['action'] == "insert") {
            $controller = new coches_controller();
            $controller->insert();
        } elseif ($_GET['action'] == "delete") {
            $controller = new coches_controller();
            $controller->delete();
        } elseif ($_GET['action'] == "ordmarca") {
            $controller = new coches_controller();
            $controller->ordmarca();
        }
        
    } elseif ($_GET['controller'] == "usuarios") {
        
        if ($_GET['action'] == "login") {
            $controller = new usuarios_controller();
            $controller->iniciarSesion();
        } elseif ($_GET['action'] == "logout") {
            $controller = new usuarios_controller();
            $controller->cerrarSesion();
        } elseif ($_GET['action'] == "muestraLogin") {
            $controller = new usuarios_controller();
            $controller->muestraLogin();
        }
    }

} else {
    $controller = new usuarios_controller();
    $controller->muestraLogin();
}
