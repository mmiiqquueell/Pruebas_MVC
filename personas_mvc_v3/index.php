<?php
session_start();
require_once("db/db.php");
require_once("controllers/personas_controller.php");
require_once("controllers/coches_controller.php");
require_once("controllers/usuarios_controller.php");

if (isset($_GET['controller']) && isset($_GET['action'])) {

    if ($_GET['controller'] == "personas") {
        
        $controller = new personas_controller();
        
        if ($_GET['action'] == "view") {
            $controller -> view();
        } elseif ($_GET['action'] == "add") {
            $controller -> add();
        } elseif ($_GET['action'] == "insert") {
            $controller -> insert();
        } elseif ($_GET['action'] == "delete") {
            $controller -> delete();
        } elseif ($_GET['action'] == "ordenar_nombre") {
            $controller -> ordenar_nombre();
        } elseif ($_GET['action'] == "ordenar_edad") {
            $controller -> ordenar_edad();
        }
        
    } elseif ($_GET['controller'] == "coches") {
        
        $controller = new coches_controller();
        
        if ($_GET['action'] == "view") {
            $controller -> view();
        } elseif ($_GET['action'] == "add") {
            $controller -> add();
        } elseif ($_GET['action'] == "insert") {
            $controller -> insert();
        } elseif ($_GET['action'] == "delete") {
            $controller -> delete();
        } elseif ($_GET['action'] == "ordmarca") {
            $controller -> ordmarca();
        }
        
    } elseif ($_GET['controller'] == "usuarios") {
       
        $controller = new usuarios_controller();
        
        if ($_GET['action'] == "login") {
            $controller -> login();
        } elseif ($_GET['action'] == "logout") {
            $controller -> logout();
        } elseif ($_GET['action'] == "muestraLogin") {
            $controller -> muestraLogin();
        }
    }
} else {
    $controller = new usuarios_controller();
    $controller -> muestraLogin();
}
